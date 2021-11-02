<div class="darken" onclick="dissolve()">
</div>
<img src="" class="preview" alt="">
<script>
    function previewImage(url){
        event.preventDefault()
        document.querySelector('.darken').style.display = 'block'
        document.querySelector('.preview').src = url
    }

    function dissolve(){
        document.querySelector('.preview').src = ''
        event.target.style.display = 'none'
    }

    // document.querySelector('.darken').addEventListener('click', function(){
    //     document.querySelector('.darken img').src = ''
    //     event.target.style.display = 'none'
    // })

</script>
<style>
    .darken{
        display: none;
        position: fixed;
        z-index: 800;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: #000000c2;
        backdrop-filter: blur(2px)
    }

    .preview{
        position: fixed;
        z-index: 802;
        width: 80%;
        top: 50%;
        left: 50%;
        max-height: 100vh;
        transform: translate(-50%,-50%)
    }
</style>
