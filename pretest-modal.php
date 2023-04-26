<div id="createPreTestModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Create Test</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">

                        <form class="ps-3 pe-3" id="preTestModalForm">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Type of Test <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="TestType">
                                            <option value="PreTest">Pre-test</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Lesson <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="lesson">
                                            <option selected>- Select -</option>
                                            <option value="1">Lesson 1</option>
                                            <option value="2">Lesson 2</option>
                                            <option value="3">Lesson 3</option>
                                            <option value="4">Lesson 4</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Concept <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="concept">
                                            <option selected>- Select -</option>
                                            <option value="1">Concept 1</option>
                                            <option value="2">Concept 2</option>
                                            <option value="3">Concept 3</option>
                                            <option value="4">Concept 4</option>
                                            <option value="5">Concept 5</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Question <span class="text-danger">*</span></label>
                                        <input name="question" class="form-control" type="text" id="emailaddress" placeholder="Enter your question" required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Answer: A <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input name="answer1" type="text" class="form-control" placeholder="Enter your answer letter A">
                                            <div class="input-group-text">
                                                <span class="mt-1"><input type="radio" name="correctAnswer" value="A" required></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Answer: B <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input name="answer2" type="text" class="form-control" placeholder="Enter your answer letter B">
                                            <div class="input-group-text">
                                                <span class="mt-1"><input type="radio" name="correctAnswer" value="B" required></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Answer: C <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input  name="answer3" type="text" class="form-control" placeholder="Enter your answer letter C">
                                            <div class="input-group-text">
                                                <span class="mt-1"><input type="radio" name="correctAnswer" value="C" required></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Answer: D <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input name="answer4" type="text" class="form-control" placeholder="Enter your answer letter D">
                                            <div class="input-group-text">
                                                <span class="mt-1"><input type="radio" name="correctAnswer" value="D" required ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="mb-3 text-center mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


