<div class="heading">
        <a href="<?= base_url()?>"><img src="<?= base_url()?>/public/assets/images/arrow.svg" alt="Back"></a>
        <h2>Study</h2>
    </div>
    <!-- Filters -->
    <div class="switch-buttons">
        <!-- <button class="switch-button active" id="popularPaperBtn">Popular Paper</button> -->
        <button class="switch-button active" id="studyMaterialBtn">Study Material</button>
    </div>
    <header>
        <div class="search-bar">
            <img src="<?= base_url()?>/public/assets/images/Fill 1.png" alt="Search Icon" class="search-icon">
            <input type="text" placeholder="Graphic Design...">
            <img src="<?= base_url()?>/public/assets/images/FILTER.svg" alt="Filter Icon" class="filter-icon">
        </div>
    </header>
    

    

    <div class="content">
        <!-- <div id="popularPaperContent" class="content-item ">
            <div id="banner-container" class="banner-container">
            </div>
        </div> -->
        <div id="studyMaterialContent" class="content-item active">
            <div class="study-material" id="study-material">
                <!-- Dynamic content will be inserted here -->
                 <!-- <img src="<?= base_url()?>/public/assets/images/save.svg" alt=""> -->
                 <div class="section-container">
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 1" class="section-image">
                        <div class="section-title">Title 1</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 2" class="section-image">
                        <div class="section-title">Title 2</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 1" class="section-image">
                        <div class="section-title">Title 3</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 2" class="section-image">
                        <div class="section-title">Title 4</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 1" class="section-image">
                        <div class="section-title">Title 5</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 2" class="section-image">
                        <div class="section-title">Title 6</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 1" class="section-image">
                        <div class="section-title">Title 7</div>
                    </div>
                    <div class="section-item">
                        <img src="<?= base_url()?>/public/assets/images/pdfimage.png" alt="Description of Image 2" class="section-image">
                        <div class="section-title">Title 8</div>
                    </div>
                    <!-- Add more sections as needed -->
                </div>
            </div>
        </div>
    </div>