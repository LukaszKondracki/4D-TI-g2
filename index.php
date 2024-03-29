<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <?php
        require('includes/header.php');
    ?>

    <div id="sidepanel">
        <nav class="side-nav">
            <ul class="side-nav-list">
                <li class="side-nav-item">abc</li>
                <li class="side-nav-item">def</li>
                <li class="side-nav-item">ghi</li>
                <li class="side-nav-item">jkl</li>
            </ul>
        </nav>
    </div>

    <main id="content">
        <h1>Moja Strona</h1>

        <article>
            <h2>Lorem ipsum</h2>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies scelerisque libero id tristique. Nunc sit amet ultricies libero, in sagittis libero. Aliquam erat volutpat. Curabitur dapibus tristique eros, sit amet scelerisque ipsum dapibus eget. Aenean sed metus sit amet mi gravida consectetur. Etiam et pretium justo. Sed erat lacus, hendrerit mollis diam in, suscipit mattis purus. Maecenas viverra metus ut posuere luctus. Nulla laoreet, est aliquam mollis fermentum, turpis ante rhoncus sapien, et tempor elit arcu ac elit. Proin a nunc in ligula auctor sagittis eu nec metus.

            Integer et lacinia libero. Donec vitae erat ac lectus lobortis semper. Fusce commodo augue molestie magna facilisis elementum. Integer diam odio, luctus sit amet elementum ut, scelerisque nec magna. Mauris eget diam ut elit tristique aliquet ornare eu mauris. Mauris a sapien feugiat, lobortis libero non, mollis nulla. Ut maximus diam a enim varius, sit amet posuere diam laoreet.
            
            Sed viverra leo ex, nec viverra est dapibus eget. Quisque semper rhoncus neque, eu fringilla metus scelerisque eu. Praesent lobortis enim sollicitudin tortor ultricies feugiat. Donec et quam vitae metus euismod vestibulum. Maecenas eu lacinia erat. Donec consequat turpis quis dictum pellentesque. Morbi eu porta lectus, a tincidunt massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin vel justo aliquam, egestas lorem a, bibendum urna. Pellentesque id nisi elit.
        </article>

    </main>

    <?php
        require('includes/footer.php');
    ?>

    <button id="theme">🌞</button>

    <script src="theme.js" ></script>
</body>
</html>