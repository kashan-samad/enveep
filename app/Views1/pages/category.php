<div class="container-fluid pt-5 mt-1">
        <nav style="--bs-breadcrumb-divider: ' >';" aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item "><a href="/">Home</a></li>
                <li class="breadcrumb-item " aria-current="page"><?php echo $category_name; ?></li>
            </ol>
        </nav>
    </div>

    <main class="mainpage">
        <div class="container text-left bg-white rounded p-md-4 mb-5">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="mb-3">
                        <h2><?php echo $category_name; ?> <span class="badge bg-warning new-badge fs-6">30 new</span></h2>
                        <div class="row">
                            <?php echo $widget_category_page_category_letters; ?>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-2 see-all-div">
                                <a href="#" class="see-all">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>