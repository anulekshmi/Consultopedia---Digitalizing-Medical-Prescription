<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultopedia</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link type="text/css" href="sample/css/sample.css" rel="stylesheet" media="screen" />
    <script src="ckeditor.js"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="left">
        <h2>Consultopedia</h2><br><br><br><br><br><br>
        <h4>Gregory House</h4>
        <div class="data">
            <p>greghouse@gmail.com</p>
        </div>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Username</h4>
                    <p>Gregory House</p>
                 </div>
                <div class="data">
                    <h4>License No.</h4>
                    <p>8PC1242</p>
                </div>
            </div>
       </div>
        <br>
        <div class="projects">
            <h3>PRESCRIPTION PAD</h3>
           
				<div id="editor"></div><br><br>
				<button id="print"><a href="Prescription.pdf" download style="text-decoration:none;">Print</a></button>
			
        </div>
        <br>
        <div class="projects">
            <h3>PATIETNT HISTORY</h3>
            <div class="projects_data">
                <div class="wrapper2">
                    <div class="search_box">
                        <input type="text" placeholder="Patient Name"><br><br><br>
                        <button><a href="Prescription.pdf" download style="text-decoration:none;">Search</a><button>
                    </div>
                </div>
            </div>
        </div>
		<br>
        <div class="projects">
            <h3>ACKNOWLEDGEMENTS</h3>
            <div class="projects_data">
                <div class="wrapper2">
                    <div class="search_box">
                        Chandler Bing: qwertyuiop
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    ClassicEditor
            .create( document.querySelector( '#editor' ), {
            } )
            .then( editor => {
        window.editor = editor;
    } )
    .catch( err => {
        console.error( err.stack );
    } );
</script>
</body>
</html>