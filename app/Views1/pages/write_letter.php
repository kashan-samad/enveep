<div class="container-fluid  pt-5 mt-1">

    <nav style="--bs-breadcrumb-divider: ' >';" aria-label="breadcrumb">
        <ol class="breadcrumb  mt-4 mb-4">
            <li class="breadcrumb-item "><a href="/">Home</a></li>
            <li class="breadcrumb-item  " aria-current="page">Write a letter</li>

        </ol>
    </nav>

    <div class="row justify-content-center  ">
      <!--main row wrapper-->
      <div class="col-lg-10 col-xs-1  ">
            <div class="bg-white rounded p-md-4 mb-5">
                <!--content wrapper-->
                <h1>
                    Write a letter
                </h1>
                <div>

                    <div class="my-3 py-3">
                    <h4>Letter heading</h4>
                    <div class="mb-3">
                        <!--title-->

                        <input type="text" class="form-control" id="formGroupExampleInput">
                        <span id="TitleValidation" class="form-text">
                        Must be 8-20 characters long.
                        </span>
                    </div>
                    <!--end of title field-->
                    </div>
                    <!--end of title wrapper-->
                    <div class="my-3 py-3">
                    <h4>Letter</h4>
                    <div class="mb-3">
                        <!--textarea-->


                        <div class="my-1">
                        <div class="btn-toolbar my-2 py-2 gap-2">

                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons ">format_bold</i>
                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">format_italic</i>
                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">format_underline</i>
                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">link</i>
                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">format_quote</i>

                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">text_fields</i>
                            </button>
                            <button type="button" class="btn btn-light toolbar_btn">
                            <i class="material-icons">spellcheck</i>
                            </button>

                        </div>
                        <!--end of text toolbar-->

                        <textarea class="form-control" id="letter_field" style="height:30em;" rows="3"></textarea>
                        </div>
                        <!--end of textarea-->

                    </div>
                    <!--end of textarea wrapper-->

                    <div class="row my-5 py-3 ">
                        <!--attachment and category wrapper-->

                        <div class="col-md ">
                        <div class="mb-3">
                            <h4 class="mb-2">Image</h4>


                            <input class="form-control" type="file" id="formFile" placeholder="No attached files">
                        </div>
                        <!--end of select image-->
                        </div>

                        <div class="col-md">
                        <h4>Category</h4>

                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected="">Choose...</option>
                            <option value="1">politics</option>
                            <option value="2">Education</option>
                            <option value="3">society</option>
                            <option value="4">world news</option>
                            <option value="5">environment</option>
                            <option value="6">health</option>
                            <option value="7">family</option>
                            <option value="8">travel</option>
                            <option value="9">sport</option>
                            <option value="10">media</option>
                            <option value="11">life</option>
                            <option value="12">technology</option>
                            <option value="13">science</option>
                            <option value="14">entertainment</option>
                            <option value="15">culture</option>
                            <option value="16">books</option>
                            <option value="17">art</option>
                            <option value="18">business</option>
                            <option value="19">environment</option>
                            </select>

                        </div>
                        <!--end of select category-->
                        </div>
                    </div>
                    <!--end of attachment and category wrapper-->
                    </div>
                    <!--end of fields wrapper-->



                    <div class="container ">
                    <div class="row my-3 py-3">
                        <div class="d-none d-md-block col-lg-8"></div>
                        <div class="col-md-6 col-lg-2 my-1">
                        <button style="width:100%;" class="btn btn-outline write_secondary py-1 " type="button">Save </button>
                        </div>
                        <div class="col-md-6 col-lg-2 pull-right my-1 ">
                        <button style="width:100%;" class="btn btn-primary write_cta py-1 ol-md-6" type="button">Publish</button>
                        </div>
                    </div>
                    </div>


                    <!--end of all content-->
                </div>
                <!--end of page wrapper-->
                </div>
            </div>
        </div>
    </div>