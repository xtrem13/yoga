
 <script
    src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
</script>
<div class="navigation_controls">
        <button id="go_previous{{$id}}">Previous</button>
        <input id="current_page{{$id}}" value="1" type="number"/>
        <button id="go_next{{$id}}">Next</button>
    </div>

    {{-- <div id="zoom_controls">  
        <button id="zoom_in">+</button>
        <button id="zoom_out">-</button>
    </div> --}}
<div id="my_pdf_viewer" style="height:600px;overflow:scroll;">
    
    <div id="canvas_container" style="overflow:scroll;">
        <canvas id="{{$id}}"></canvas>
    </div>

    
</div>
<script>
    var myState{{$id}} = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }

    pdfjsLib.getDocument('{{$path}}').then((pdf) => {

        myState{{$id}}.pdf = pdf;
        render{{$id}}();

    });

    function render{{$id}}() {

        myState{{$id}}.pdf.getPage(myState{{$id}}.currentPage).then((page) => {

            var canvas{{$id}} = document.getElementById("{{$id}}");
            var ctx{{$id}} = canvas{{$id}}.getContext('2d');

            var viewport{{$id}} = page.getViewport(myState{{$id}}.zoom);

            canvas{{$id}}.width = viewport{{$id}}.width;
            canvas{{$id}}.height = viewport{{$id}}.height;

            page.render({
                canvasContext: ctx{{$id}},
                viewport: viewport{{$id}}
            });
        });
    }
    document.getElementById('go_previous{{$id}}')
    .addEventListener('click', (e) => {
        if(myState{{$id}}.pdf == null|| myState{{$id}}.currentPage == 1) 
            return;
        
        myState{{$id}}.currentPage -= 1;
        document.getElementById("current_page{{$id}}").value = myState{{$id}}.currentPage;
        render{{$id}}();
    });
    document.getElementById('go_next{{$id}}')
    .addEventListener('click', (e) => {
        console.log("n ", myState{{$id}}, myState{{$id}}.pdf._pdfInfo.numPages);
        console.log("n ",  myState{{$id}}, myState{{$id}}.pdf._pdfInfo);
        
        if(myState{{$id}}.pdf == null || myState{{$id}}.currentPage >= myState{{$id}}.pdf._pdfInfo.numPages) 
            return;

        myState{{$id}}.currentPage += 1;
        document.getElementById("current_page{{$id}}").value = myState{{$id}}.currentPage;
        render{{$id}}();
    });
    // document.getElementById('zoom_in')
    // .addEventListener('click', (e) => {
    //     if(myState.pdf == null) return;
    //     myState.zoom += 0.5;

    //     render();
    // });
    // document.getElementById('zoom_out')
    // .addEventListener('click', (e) => {
    //     if(myState.pdf == null) return;
    //     myState.zoom -= 0.5;

    //     render();
    // });
</script>