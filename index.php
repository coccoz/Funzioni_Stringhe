<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tr = "
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis massa quis viverra volutpat. In ac massa vel nisl luctus dictum. Praesent malesuada nisl lorem, non rutrum ante auctor vel. Nam commodo volutpat purus, vitae convallis purus varius nec. Phasellus dignissim semper nibh ac suscipit. Nunc sagittis lectus at mattis faucibus. Donec consequat rutrum erat sit amet luctus. Donec eget eros eu nisl iaculis porttitor et a tortor.

                Phasellus placerat, turpis vel interdum molestie, diam dui porta neque, sed gravida ante metus ac neque. Nunc a volutpat orci. Cras dictum magna velit, a rhoncus mauris mollis tincidunt. Maecenas ut tellus sodales, accumsan sapien finibus, lacinia massa. Donec velit est, euismod id ligula et, molestie euismod augue. Aenean tempor ornare volutpat. Maecenas mollis bibendum eros. Ut at eleifend ante, quis aliquam sem. Nam id arcu diam. Duis at nunc eget arcu tincidunt accumsan. Sed ullamcorper est tellus, id semper velit tincidunt eget. Etiam fermentum ante vitae justo aliquam commodo at id tortor. Sed non lacus vitae massa dignissim luctus ac molestie nulla.

                Nunc tristique ornare erat a rutrum. Donec velit ex, ornare vitae euismod eget, rutrum non nunc. Nam venenatis nulla et nunc hendrerit, vel elementum ipsum faucibus. Vivamus faucibus tortor vitae orci venenatis convallis nec ac eros. Aenean ac enim id risus tempus convallis vitae ut quam. Integer vitae viverra leo. Aliquam et risus dui. Sed a velit ultricies, egestas metus vitae, viverra metus. In sed cursus felis. Ut tempor lorem at turpis pharetra pulvinar. Vestibulum non sem nulla. Vivamus at auctor sapien, eu pretium nulla. Donec ac risus nunc. Sed sit amet sodales erat. Suspendisse commodo dui sit amet tortor efficitur viverra. Fusce at felis dictum, facilisis nibh sed, bibendum dolor.

                Nullam convallis sem vitae vestibulum fringilla. Phasellus et feugiat leo. Nulla porta dolor sit amet neque semper ornare. Nulla id nibh a eros ornare fringilla et porta mauris. In hac habitasse platea dictumst. Vestibulum pulvinar vitae libero eu consequat. Maecenas tempus ex nibh, quis lobortis lectus auctor sit amet. Ut fermentum libero nec enim sagittis maximus. In rhoncus sed nisl vitae hendrerit. Donec sed odio id purus condimentum pharetra sed ut neque. Suspendisse vulputate sit amet eros condimentum ultrices. Etiam vel venenatis felis, a gravida felis. Integer fringilla semper consequat. Pellentesque ultrices est quis massa pellentesque, eget feugiat libero placerat. In nec metus ut libero vulputate consequat. Maecenas et imperdiet arcu, efficitur porttitor nisi.

                Nullam molestie turpis vulputate lorem volutpat porttitor. Mauris porta condimentum pellentesque. Ut feugiat nisi at magna efficitur laoreet. In sed laoreet tellus, nec egestas tortor. In hac habitasse platea dictumst. Aliquam varius neque a neque cursus mollis. Nullam ac nunc quis arcu posuere imperdiet. Nam congue lectus a magna iaculis tempus quis eget felis. Phasellus pellentesque dolor vel quam lacinia varius. Proin in libero velit. Sed nisl turpis, gravida non rhoncus id, bibendum vel eros. Aenean iaculis malesuada dictum. Praesent suscipit maximus condimentum. Fusce imperdiet est eu placerat accumsan.
              ";

       
        echo "<p style='color: green'>$tr</p>";

        $up = strtoupper($tr);

        echo "<p style='color: blue'>$up</p>";

        $len = strlen($tr);

        echo "<span style='color: red'>$len <br><br></span>";

        $ws = count(explode(" ", $tr));

        echo "<span style='color: yellow; background-color: grey'>$ws</span>";

        
    ?>
</body>
</html>