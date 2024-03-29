<?php include 'header.php';?>
<!-- Header Section End -->

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Create Resume</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Content section Start -->
<section id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-xs-12">
                <div class="add-resume box">
                    <div class="post-header">
                        <p>Already have an account? <a href="register.html">Click here to login</a></p>
                    </div>
                    <form class="form-ad">
                        <h3>Basic information</h3>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="control-label"></label>
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" placeholder="Your@domain.com">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Profession Title</label>
                            <input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Location</label>
                            <input type="text" class="form-control" placeholder="Location, e.g">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Web</label>
                            <input type="text" class="form-control" placeholder="Website address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pre Hour</label>
                            <input type="text" class="form-control" placeholder="Salary, e.g. 85">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Age</label>
                            <input type="text" class="form-control" placeholder="Years old">
                        </div>
                        <div class="form-group">
                            <div class="button-group">
                                <div class="action-buttons">
                                    <div class="upload-button">
                                        <button class="btn btn-common">Choose a cover image</button>
                                        <input id="cover_img_file_2" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Education</h3>
                        <div class="form-group">
                            <label class="control-label">Degree</label>
                            <input type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Field of Study</label>
                            <input type="text" class="form-control" placeholder="Major, e.g Computer Science">
                        </div>
                        <div class="form-group">
                            <label class="control-label">School</label>
                            <input type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">From</label>
                                    <input type="text" class="form-control" placeholder="e.g 2014">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">To</label>
                                    <input type="text" class="form-control" placeholder="e.g 2020">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="button-group">
                                <div class="action-buttons">
                                    <div class="upload-button">
                                        <button class="btn btn-common">Choose a cover Logo</button>
                                        <input id="cover_img_file_3" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-post-btn">
                            <div class="float-left">
                                <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Education</a>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                            </div>
                        </div>
                        <div class="divider">
                            <h3>Work Experience</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" class="form-control" placeholder="Company name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" placeholder="e.g UI/UX Researcher">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Date Form</label>
                                    <input type="text" class="form-control" placeholder="e.g 2014">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Date To</label>
                                    <input type="text" class="form-control" placeholder="e.g 2020">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                        </div>
                        <section id="editor" style="margin-bottom: 30px;">
                            <div id="summernote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p>
                            </div>
                        </section>
                        <div class="form-group">
                            <div class="button-group">
                                <div class="action-buttons">
                                    <div class="upload-button">
                                        <button class="btn btn-common">Choose a cover Logo</button>
                                        <input id="cover_img_file_1" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-post-btn">
                            <div class="float-left">
                                <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Experience</a>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                            </div>
                        </div>
                        <div class="divider">
                            <h3>Skills</h3>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Skill Name</label>
                                    <input class="form-control" placeholder="Skill name, e.g. HTML" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">% (1-100)</label>
                                    <input class="form-control" placeholder="Skill proficiency, e.g. 90" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="add-post-btn">
                            <div class="float-left">
                                <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Skills</a>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                            </div>
                        </div>
                    </form>
                    <a href="resume.html" class="btn btn-common">Save</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->

<!-- Footer Section Start -->
<?php include 'footer.php';?>
