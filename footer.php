 <!-- /End-bar -->
 
 <?php include 'pretest-modal.php'; ?>
 <?php include 'checkpointexammodal.php'; ?>
 <?php include 'myaccountmodal.php'; ?>
 <?php include 'createconceptmodal.php'; ?>


 <?php  if(isset($_GET['added'])){
        echo "<script>
        Swal.fire(
            'Success',
            'Successfully added',
            'success'
            )
            
        </script>";
    } ?>
            



<!-- bundle -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>
        


<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

<script>
    $("#learningMethods").on("change", function(){
        if($(this).val() == 1){
            $("#insertBodyHere").append("<div class='mb-3' id='uploadpdf'><label for='fullname' class='form-label'>PDF File <span class='text-danger'>*</span></label><input name='uploadpdf' class='form-control' type='file'  required ></div>")
            $("#uploadvideo").remove();
            $("#uploadvisual").remove();
        }
        else if($(this).val() == 2){
            $("#uploadpdf").remove();
            $("#uploadvisual").remove();
            $("#insertBodyHere").append("<div class='mb-3' id='uploadvideo'><label for='fullname' class='form-label'>Upload Video Link <span class='text-danger'>*</span></label><input name='uploadvideo' class='form-control' type='text'  required ></div>")
        }
        else if($(this).val() == 3){
            $("#uploadpdf").remove();
            $("#uploadvideo").remove();
            $("#insertBodyHere1").append("<div class='mb-3' id='uploadvisual'><textarea id='editor' name='uploadvisual'></textarea></div>")

            ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
            

        }
    })

</script>
<!-- <div class="mb-3" id="uploadpdf">
    <label for="fullname" class="form-label">PDF File <span class="text-danger">*</span></label>
    <input name="uploadpdf" class="form-control" type="file" value="NA"  required >
</div>
<div class="mb-3" style="display: none;" id="uploadvideo">
    <label for="fullname" class="form-label">Upload Video Link <span class="text-danger">*</span></label>
    <input name="uploadvideo" class="form-control" type="text" value="NA"  required >
</div> -->

<script>
    $(document).ready(function(){
        $("#thisTable").DataTable();


   

        $(".deleteQuestionCheckpoint").on("click",function(){
            var uid = $(this).attr("id");
            $.ajax({
            url: 'Controller/DeleteQuestionCheckpoint.php',
            type: 'POST',
            data: {QID : uid},
            success: function(response) {
                if(response == "Success"){
                    Swal.fire({
                    title: 'Success',
                    text: "Question has been deleted successfully",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                    })
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
            });
        })



        $(".deleteQuestion").on("click",function(){
            var uid = $(this).attr("id");
            $.ajax({
            url: 'Controller/DeleteQuestion.php',
            type: 'POST',
            data: {QID : uid},
            success: function(response) {
                if(response == "Success"){
                    Swal.fire({
                    title: 'Success',
                    text: "Question has been deleted successfully",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                    })
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
            });
        })

        




        $("#preTestModalForm").on("submit", function(e){
                e.preventDefault();

                    var formData = new FormData($(this)[0]);

                    $.ajax({
                    url: 'Controller/CreatePreTest.php',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                        title: 'Success',
                        text: "Test has been created successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                        })
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                    });

            })



        $("#updateAccountForm").on("submit", function(e){
            e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                url: 'Controller/UserUpdate.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if(response == 'Success'){
                        $.NotificationApp.send("Success","Your account has been updated.","top-right","","success")
                        $('#myAccountModal').modal('hide');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
                });
        })



        $("#learningMethod").modal('show');
        
        $("#readingBTNLM").click(function(){
            var lesson = $("#LessonID").val();
            var concept = $("#ConceptID").val();
            var learningtool = $("#LearningToolID").val();
            var userid = $("#useridID").val();


            $("#readingLM").show();
            $("#audioLM").hide();
            $("#visualLM").hide();
            $("#learningMethod").modal('hide');

            GetTime(userid,lesson,concept,learningtool);

        })
        $("#audioBTNLM").click(function(){
            var lessonAud = $("#LessonIDAud").val();
            var conceptAud = $("#ConceptIDAud").val();
            var learningtoolAud = $("#LearningToolIDAud").val();
            var useridAud = $("#useridIDAud").val();
            $("#audioLM").show();
            $("#readingLM").hide();
            $("#visualLM").hide();
            $("#learningMethod").modal('hide');
            GetTime(useridAud,lessonAud,conceptAud,learningtoolAud);
        })
        $("#visualBTNLM").click(function(){
            $("#visualLM").show();
            $("#audioLM").hide();
            $("#readingLM").hide();
            $("#learningMethod").modal('hide');
        })

    })


    function GetTime(studID, lesson, concept, learningtool){
        var sec = 0;
        var timer;

        timer = setInterval(() => {
            sec++;
            if(sec == 5){
                console.log("push to database")
                $.ajax({
                    type: "POST",
                    url: "Controller/GetTime.php",
                    data: {Seconds : sec , StudID : studID , Lesson : lesson , Concept : concept , LearningTool : learningtool},
                    success: function(response){
                    }
                })
                sec = 0;
            }
            
        }, 1000);
    }


    // $("#takePretestExam").on("submit", function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "Controller/TakeExam.php",
    //         data: new FormData($(this).serialize()),
    //         success: function(response){
    //             alert(response)
    //         }
    //     })
    // })

    $("#submitTestFormConcept11").click(function(){
        var formData = $("#submitExamFormConcept11").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept11").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept11").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept12").click(function(){
        var formData = $("#submitExamFormConcept12").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept12").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept12").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept13").click(function(){
        var formData = $("#submitExamFormConcept13").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept13").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept13").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept14").click(function(){
        var formData = $("#submitExamFormConcept14").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept14").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept14").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept21").click(function(){
        var formData = $("#submitExamFormConcept21").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept21").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept21").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept22").click(function(){
        var formData = $("#submitExamFormConcept22").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept22").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept22").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept23").click(function(){
        var formData = $("#submitExamFormConcept23").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept23").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept23").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept24").click(function(){
        var formData = $("#submitExamFormConcept24").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept24").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept24").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept31").click(function(){
        var formData = $("#submitExamFormConcept31").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept31").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept31").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept32").click(function(){
        var formData = $("#submitExamFormConcept32").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept32").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            alert(response);
                            if(response == "YouPassed"){
                                sweetAlertMessages('Passed Exam',"Congratulations, you passed the exam.",'success');
                            }
                        }
                    })
                }else{
                    $("#submitExamFormConcept32").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            if(response == "FailedExam1"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam, you still have 1 attempt to take the exam",'error');
                            }
                            else if(response == "FailedExam2"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam. Please proceed directly to next lesson.",'error');
                            }
                        }
                    })
                }
            }
        })
    })
    $("#submitTestFormConcept33").click(function(){
        var formData = $("#submitExamFormConcept33").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept33").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept33").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept34").click(function(){
        var formData = $("#submitExamFormConcept34").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept34").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                    
                    
                }else{
                    $("#submitExamFormConcept34").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                    
                }
            }
        })
    })
    $("#submitTestFormConcept41").click(function(){
        var formData = $("#submitExamFormConcept41").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept41").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept41").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept42").click(function(){
        var formData = $("#submitExamFormConcept42").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept42").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept42").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept43").click(function(){
        var formData = $("#submitExamFormConcept43").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept43").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            alert(response);
                            if(response == "YouPassed"){
                                sweetAlertMessages('Passed Exam',"Congratulations, you passed the exam.",'success');
                            }
                        }
                    })
                }else{
                    $("#submitExamFormConcept43").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            if(response == "FailedExam1"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam, you still have 1 attempt to take the exam",'error');
                            }
                            else if(response == "FailedExam2"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam. Please proceed directly to next lesson.",'error');
                            }
                        }
                    })
                }
            }
        })
    })
    $("#submitTestFormConcept44").click(function(){
        var formData = $("#submitExamFormConcept44").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept44").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept44").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept51").click(function(){
        var formData = $("#submitExamFormConcept51").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept51").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept51").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept52").click(function(){
        var formData = $("#submitExamFormConcept52").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept52").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept52").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept53").click(function(){
        var formData = $("#submitExamFormConcept53").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept53").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitExamFormConcept53").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitTestFormConcept54").click(function(){
        var formData = $("#submitExamFormConcept54").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeExam.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitExamFormConcept54").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            alert(response);
                            if(response == "YouPassed"){
                                sweetAlertMessages('Passed Exam',"Congratulations, you passed the exam.",'success');
                            }
                        }
                    })
                }else{
                    $("#submitExamFormConcept54").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                    $.ajax({
                        type: "POST",
                        url: "Controller/ScoreChecker.php",
                        data: formData,
                        success: function(response){
                            if(response == "FailedExam1"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam, you still have 1 attempt to take the exam",'error');
                            }
                            else if(response == "FailedExam2"){
                                sweetAlertMessages('Failed Exam',"You have failed on exam. Please proceed directly to next lesson.",'error');
                            }
                        }
                    })
                }
            }
        })
    })




















    // CHECKPOINT EXAM

    $("#submitCheckpointFormBtn1").click(function(){
        var formData = $("#submitCheckpointForm1").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeCheckpoint.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitCheckpointForm1").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitCheckpointForm1").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitCheckpointFormBtn2").click(function(){
        var formData = $("#submitCheckpointForm2").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeCheckpoint.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitCheckpointForm2").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitCheckpointForm2").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitCheckpointFormBtn3").click(function(){
        var formData = $("#submitCheckpointForm3").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeCheckpoint.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitCheckpointForm3").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitCheckpointForm3").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitCheckpointFormBtn4").click(function(){
        var formData = $("#submitCheckpointForm4").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeCheckpoint.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitCheckpointForm4").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitCheckpointForm4").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })
    $("#submitCheckpointFormBtn5").click(function(){
        var formData = $("#submitCheckpointForm5").serialize()+"&SubmitPretestForm=SubmitPretestForm";
        $.ajax({
            type: "POST",
            url: "Controller/TakeCheckpoint.php",
            data: formData,
            success: function(response){
                if(response == "success"){
                    $("#submitCheckpointForm5").hide();
                    Swal.fire(
                    'Good job!',
                    'You got the answer',
                    'success'
                    )
                }else{
                    $("#submitCheckpointForm5").hide();
                    Swal.fire(
                    'Wrong',
                    'You got the wrong answer',
                    'error'
                    )
                }
            }
        })
    })











    function sweetAlertMessages(title,body,icon){

            Swal.fire({
            title: title,
            text: body,
            icon: icon,
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Okay'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "dashboard.php";
            }
            })
        
        
    }





</script>





