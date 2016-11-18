function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var obj = document.getElementById('display-parent');
            obj.innerHTML = '<img id="displayImg" src="#" alt="content" >';
            reader.onload = function (e) {
                $('#displayImg')
                    .attr('src', e.target.result)
                    .width(60)
                    .height(60);
            };
          
            reader.readAsDataURL(input.files[0]);
        }
    }