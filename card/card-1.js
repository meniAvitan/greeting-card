
        var i = 0;
        var txt;
        function typeWriter() {
            txt =  "<?php echo $row['text']?>" ;
        if (i < txt.length) {
            let x = document.getElementById('text-res');
            x.innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        }
        }
        typeWriter();



