<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net4U Feedback Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        /*h5{
            text-align: center;
        }*/

         body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        h3 {
            color: #007bff;
        }
        h5 {
            color: #007bff;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }
        .radio-group {
            margin-bottom: 15px;
        }
        .radio-group input {
            margin-right: 10px;
        }
        
        }
        .form-section {
            border: 1px solid #e9ecef;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
          <div class="form-section">
        <h3 class="card-header">Basic Information</h3>
        <br>
        <form action="<?= site_url('feedback/submit'); ?>" method="POST">
            <!-- Basic Information -->
            <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required pattern="[A-Za-z\s]+" title="Only alphabetic characters are allowed" placeholder="Your answer" />
            </div>
             <div class="form-group">
                <label for="phone_no">Phone Number <span class="text-danger">*</span></label>
                <input type="number" class="form-control"  id="nextFormPhoneNumber" name="phone_no" placeholder="Your answer"   readonly />
            </div>
            <div class="form-group">
                <label for="age">Age<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Your answer" required />
            </div>
            <div class="form-group radio-group">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="Male" required /> Male<br>
                <input type="radio" name="gender" value="Female" required /> Female
            </div>
            <div class="form-group">
                <label for="flat_no">Flat No. <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="flat_no" name="flat_no" placeholder="Your answer" required />
            </div>
            <div class="form-group">
                <label for="building">Building <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="building" name="building"  placeholder="Your answer" required />
            </div>
             <br>
            <!-- Section A – NPS -->
            <h5>Section A – NPS</h5>
            <div class="form-group radio-group">
                <label>QA1. How likely is it that you would recommend Net4U to a friend or a colleague? <span class="text-danger">*</span><br>
                (Please use the scale from 10 to 0. 10 means “Definitely recommend” and 0 means “Would Never Recommend”. You can also use any number in between.)</label><br>
                 Would Never Recommend<br>
                 <input type="radio" name="recommend" value="0" required>0<br>
                <input type="radio" name="recommend" value="1"> 1<br>
                <input type="radio" name="recommend" value="2"> 2<br>
                <input type="radio" name="recommend" value="3"> 3<br>
                <input type="radio" name="recommend" value="4"> 4<br>
                <input type="radio" name="recommend" value="5"> 5<br>
                <input type="radio" name="recommend" value="6"> 6<br>
                <input type="radio" name="recommend" value="7"> 7<br>
                <input type="radio" name="recommend" value="8"> 8<br>
                <input type="radio" name="recommend" value="9"> 9<br>
                <input type="radio" name="recommend" value="10">10<br>
                 Definitely recommend
                <!-- //<input type="number" name="recommend" min="0" max="10" step="1"> -->
            </div>
            <div class="form-group">
                <label for="reason">QA2. Why do you say so?(Reason #01)<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="reason" name="reason" placeholder="Your answer" required>
            </div>
             <br>
            <!-- Section B – Internet Related Issues -->
            <h5>Section B – Internet Related Issues (Last 06 Months)</h5>

            <div class="form-group radio-group">
                <label>QB1. Have You faced any Internet Related Issues in Last 06 Months? <span class="text-danger">*</span></label><br>
                <input type="radio" name="internet_issue" value="Yes" id="yes_issue" required> Yes<br>
                <input type="radio" name="internet_issue" value="No" id="no_issue" required> No
            </div>
            <div class="form-group" id="issue_details" style="display:none;" >
                <label for="issue">QB2. What Issue have You faced?</label>
                <input type="text" class="form-control" id="issue" name="issue" placeholder="Your answer">
            </div>
            <div class="form-group radio-group" id="complaint_section">
                <label>QB3. Have You raised a Complaint Regarding the Issue Faced?</label><br>
                <input type="radio" name="raised_complaint" value="Yes" id="yes_complaint"> Yes<br>
                <input type="radio" name="raised_complaint" value="No" id="no_complaint"> No
            </div>
            <div class="form-group radio-group" id="complaint_rating" style="display:none;">
                <label>QB4. Could you rate your service/complaint handling experience by rating on scale of 10 to 0? (10 being "Extremely Satisfied" and 0 being "Extremely Dissatisfied.")</label><br>
                Extremely Dissatisfied<br>
                <input type="radio" name="service_rating" value="0" >0<br>
                <input type="radio" name="service_rating" value="1">1<br>
                <input type="radio" name="service_rating" value="2">2<br>
                <input type="radio" name="service_rating" value="3">3<br>
                <input type="radio" name="service_rating" value="4">4<br>
                <input type="radio" name="service_rating" value="5">5<br>
                <input type="radio" name="service_rating" value="6">6<br>
                <input type="radio" name="service_rating" value="7">7<br>
                <input type="radio" name="service_rating" value="8">8<br>
                <input type="radio" name="service_rating" value="9">9<br>
                <input type="radio" name="service_rating" value="10">10<br> Extremely Satisfied
            </div>
            <div class="form-group" id="complaint_reason" style="display:none;">
                 <label  for="service_reason">QB5.Reasons</label>
                <input type="text" class="form-control" id="service_reason" name="service_reason" placeholder="Your answer">
            </div>

     <div class="form-group radio-group">
    <label>QB6. We would NOW read out a few statements related to the Complaint Resolution Process. <span class="text-danger">*</span><br> (Please let us know how strongly you agree on a scale of 5 to 1. 5 being "Strongly Agree" and 1 being "Strongly Disagree")</label><br>
    
    <label>My Complaint was promptly Acted Upon</label><br>
    <input type="radio" name="prompt_action_rating" value="NA" required> NA<br>
    <input type="radio" name="prompt_action_rating" value="1"> 1<br>
    <input type="radio" name="prompt_action_rating" value="2"> 2<br>
    <input type="radio" name="prompt_action_rating" value="3"> 3<br>
    <input type="radio" name="prompt_action_rating" value="4"> 4<br>
    <input type="radio" name="prompt_action_rating" value="5"> 5
    <br>

    <label>Net4U Person has provided Proper Guidance to me on Phone</label><br>
    <input type="radio" name="guidance_rating" value="NA" required> NA<br>
    <input type="radio" name="guidance_rating" value="1"> 1<br>
    <input type="radio" name="guidance_rating" value="2"> 2<br>
    <input type="radio" name="guidance_rating" value="3"> 3<br>
    <input type="radio" name="guidance_rating" value="4"> 4<br>
    <input type="radio" name="guidance_rating" value="5"> 5
    <br>

    <label>Net4U Person visited my home and has done the needful</label><br>
    <input type="radio" name="home_visit_rating" value="NA" required> NA<br>
    <input type="radio" name="home_visit_rating" value="1" > 1<br>
    <input type="radio" name="home_visit_rating" value="2"> 2<br>
    <input type="radio" name="home_visit_rating" value="3"> 3<br>
    <input type="radio" name="home_visit_rating" value="4"> 4<br>
    <input type="radio" name="home_visit_rating" value="5"> 5
    <br>

    <label>My Complaint was Resolved in a Timely Manner</label><br>
    <input type="radio" name="timely_resolution_rating" value="NA" required> NA<br>
    <input type="radio" name="timely_resolution_rating" value="1"> 1<br>
    <input type="radio" name="timely_resolution_rating" value="2"> 2<br>
    <input type="radio" name="timely_resolution_rating" value="3"> 3<br>
    <input type="radio" name="timely_resolution_rating" value="4"> 4<br>
    <input type="radio" name="timely_resolution_rating" value="5"> 5
    <br>

    <label>I am Happy with the manner in which My Complaint was Handled by Net4U Services</label><br>
    <input type="radio" name="handling_rating" value="NA" required> NA<br>
    <input type="radio" name="handling_rating" value="1"> 1<br>
    <input type="radio" name="handling_rating" value="2"> 2<br>
    <input type="radio" name="handling_rating" value="3"> 3<br>
    <input type="radio" name="handling_rating" value="4"> 4<br>
    <input type="radio" name="handling_rating" value="5"> 5
    <br>

    <label>I felt valued as a Customer</label><br>
    <input type="radio" name="valued_rating" value="NA" required> NA<br>
    <input type="radio" name="valued_rating" value="1"> 1<br>
    <input type="radio" name="valued_rating" value="2"> 2<br>
    <input type="radio" name="valued_rating" value="3"> 3<br>
    <input type="radio" name="valued_rating" value="4"> 4<br>
    <input type="radio" name="valued_rating" value="5"> 5
</div>
<br>

            <!-- Section C – Feedback On Executive -->
            <h5>Section C – Feedback On Executive</h5>
            <div>
            <div class="form-group radio-group">
                <label>QC1.We would read out a few statements related to Issue Resolution Via Home Visit.<span class="text-danger">*</span><br>(Please let us know how strongly you agree on scale of 5 to 1. 5 being "Strongly Agree" and 1 being "Strongly Disagree")</label><br>
                <label>Net4U Executive was polite and courteous</label><br>
                <input type="radio" name="courteous_rating" value="NA" required> NA<br>
                <input type="radio" name="courteous_rating" value="1"> 1<br>
                <input type="radio" name="courteous_rating" value="2"> 2<br>
                <input type="radio" name="courteous_rating" value="3"> 3<br>
                <input type="radio" name="courteous_rating" value="4"> 4<br>
                <input type="radio" name="courteous_rating" value="5"> 5
                <br>
                 <label>Net4U Executive was available whenever required</label><br>
                  <input type="radio" name="available_rating" value="NA" required> NA<br>
                <input type="radio" name="available_rating" value="1"> 1<br>
                <input type="radio" name="available_rating" value="2"> 2<br>
                <input type="radio" name="available_rating" value="3"> 3<br>
                <input type="radio" name="available_rating" value="4"> 4<br>
                <input type="radio" name="available_rating" value="5"> 5
                <br>
                 <label>Net4U Executive has good knowledge</label><br>
                 <input type="radio" name="knowledge_rating" value="NA" required> NA<br>
                <input type="radio" name="knowledge_rating" value="1"> 1<br>
                <input type="radio" name="knowledge_rating" value="2"> 2<br>
                <input type="radio" name="knowledge_rating" value="3"> 3<br>
                <input type="radio" name="knowledge_rating" value="4"> 4<br>
                <input type="radio" name="knowledge_rating" value="5"> 5
                <br>
                 <label>Net4U Executive was able to solve all your queries</label><br>
                 <input type="radio" name="query_resolution_rating" value="NA" required> NA<br>
                <input type="radio" name="query_resolution_rating" value="1"> 1<br>
                <input type="radio" name="query_resolution_rating" value="2"> 2<br>
                <input type="radio" name="query_resolution_rating" value="3"> 3<br>
                <input type="radio" name="query_resolution_rating" value="4"> 4<br>
                <input type="radio" name="query_resolution_rating" value="5"> 5
                <br>
                 <label>Net4U Executive fulfilled his promises and commitment</label><br>
                 <input type="radio" name="promises_fulfilled_rating" value="NA" required> NA<br>
                <input type="radio" name="promises_fulfilled_rating" value="1"> 1<br>
                <input type="radio" name="promises_fulfilled_rating" value="2"> 2<br>
                <input type="radio" name="promises_fulfilled_rating" value="3"> 3<br>
                <input type="radio" name="promises_fulfilled_rating" value="4"> 4<br>
                <input type="radio" name="promises_fulfilled_rating" value="5"> 5
           </div>
        </div>
        <br>
            
            <!-- Section D – Future Intent -->
            <h5>Section D – Future Intent</h5>
            <div class="form-group radio-group">
                <label>QD1. Do You wish to Continue with Net4U Services for Your Internet Provider? <span class="text-danger">*</span></label><br>
                <input type="radio" name="continue_service" value="Yes" id="continue_yes" required> Yes<br>
                <input type="radio" name="continue_service" value="No" id="continue_no" required> No
            </div>
            <div class="form-group" id="exit_reason_container" style="display:none;">
                <label for="exit_reason">Please let us know Your Reasons.</label>
                <input type="text" class="form-control" id="exit_reason" name="exit_reason" placeholder="Your answer" >
            </div>
            <br>

            <!-- Section E – Improvement Areas / Suggestions -->
            <h5>Section E – Improvement Areas / Suggestions</h5>
            <div class="form-group" >
                <label for="improvement">QE. Could you let us know areas where Net4U Services should improve? <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="improvement" name="improvement" placeholder="Your answer" required>
            </div>
        <div style="margin-bottom:10px;">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
        </form>
    </div>
</div>

 <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">OTP Verification</h5>
                
            </div>
            <div class="modal-body">
                <form method="post" id="otpForm" >
                    <!-- Mobile Number Input -->
                    <div class="form-group" id="mobileGroup">
                        <label for="mobile_number">Mobile Number</label>
                        <input class="form-control" type="number" name="phone" id="phone" placeholder="Enter Mobile Number" required />
                    </div>
                    <!-- OTP Input -->
                    <div class="form-group" id="otpGroup" style="display:none;">
                        <label for="otp">OTP</label>
                        <input class="form-control" type="number" name="otp" id="otp" placeholder="Enter OTP" required />
                        <small class="form-text text-muted">OTP sent to your number.</small>
                    </div>
                    <div class="modal-footer">
                <!-- Send OTP Button -->
                <button type="submit" class="btn btn-primary" id="sendOtpBtn">Send OTP</button>
                <!-- Verify OTP Button (Initially hidden) -->
                <button type="button" class="btn btn-success" id="verifyOtpBtn" style="display:none;">Verify OTP</button>
            </div>
                </form>
            </div>
          
        </div>
    </div>


</div>



    <!-- <footer class="bg-light text-center text-black mt-5 p-4"><p>Net4U Survey</p></footer> -->

    


<script>
$(document).ready(function() {
    // Show the modal when the page loads
    $("#staticModal").modal('show');

    let generatedOtp; // Variable to store generated OTP

    // Event listener for "Send OTP" button
    $('#sendOtpBtn').on('click', function() {
        let mobileNumber = $('#phone').val();
        
        if (mobileNumber.length === 10) {
            // Generate a random 6-digit OTP (it will be different every time)
            generatedOtp = Math.floor(100000 + Math.random() * 900000);
            
            // Display the generated OTP (For demo purposes)
            alert('Your OTP is: ' + generatedOtp);  // In a real-world scenario, you would not display this

            // Switch to OTP input field
            $('#mobileGroup').hide();  // Hide mobile number input
            $('#otpGroup').show();     // Show OTP input
            $('#sendOtpBtn').hide();   // Hide "Send OTP" button
            $('#verifyOtpBtn').show(); // Show "Verify OTP" button
        } else {
            alert('Please enter a valid 10-digit mobile number');
        }
    });

    // Event listener for "Verify OTP" button
    $('#verifyOtpBtn').on('click', function(e) {
         e.preventDefault(); 
        let enteredOtp = $('#otp').val();
        
        // Check if entered OTP matches the generated OTP
        if (enteredOtp == generatedOtp) {
            alert('OTP Verified successfully!');
             verifiedPhoneNumber = $('#phone').val();

            // Call function to submit the phone number and other data to the controller via AJAX
            submit_phone();

              // Prefill the next form (example)
            $('#nextFormPhoneNumber').val(verifiedPhoneNumber);

            // Close the modal after successful verification
            $("#staticModal").modal('hide');
        } else {
            alert('Invalid OTP. Please try again.');
        }
    });

    // AJAX function to submit phone number and update the database
    function submit_phone() {
        let phoneNumber = $('#phone').val(); // Assuming phone input field has id "phone"
        
        
        $.ajax({
            url: '<?= base_url("feedback/submit_phone") ?>', // Update this URL to your controller function
            type: 'POST',
            data: {
                phone_number: phoneNumber,
                //other_data: otherData
            },
            dataType: 'json',
            // success: function(response) {
            //     if (response.status === 'success') {
            //         alert('Data updated successfully!');
            //         // You can redirect or perform further actions here
            //     } else {
            //         alert('Failed to update data.');
            //     }
            // },
            // error: function() {
            //     alert('Error occurred while updating data.');
            // }
        });
    }
});




    // Handle QB1 (Internet Issue)
    document.getElementById('yes_issue').addEventListener('click', function() {
        document.getElementById('issue_details').style.display = 'block';
        document.getElementById('complaint_section').style.display = 'block';
        document.getElementById('issue').setAttribute('required', 'required');
    });

    document.getElementById('no_issue').addEventListener('click', function() {
        // Hide everything and remove required attributes
        document.getElementById('issue_details').style.display = 'none';
        document.getElementById('complaint_section').style.display = 'none';
        document.getElementById('complaint_rating').style.display = 'none';
        document.getElementById('complaint_reason').style.display = 'none';
        document.getElementById('issue').removeAttribute('required');
        document.getElementById('service_reason').removeAttribute('required');

        // Clear values if fields were filled previously
        document.getElementById('issue').value = '';
        document.getElementById('service_reason').value = '';
        clearRadioSelection('raised_complaint');
        clearRadioSelection('service_rating');
    });

    // Handle QB3 (Raised Complaint)
    document.getElementById('yes_complaint').addEventListener('click', function() {
        document.getElementById('complaint_rating').style.display = 'block';
        document.getElementById('complaint_reason').style.display = 'block';
        setRequiredForRadioGroup('service_rating', true);
        document.getElementById('service_reason').setAttribute('required', 'required');
    });

    document.getElementById('no_complaint').addEventListener('click', function() {
        document.getElementById('complaint_rating').style.display = 'none';
        document.getElementById('complaint_reason').style.display = 'none';
        setRequiredForRadioGroup('service_rating', false);
        document.getElementById('service_reason').removeAttribute('required');
        clearRadioSelection('service_rating');
    });

    // Helper to clear radio button selections
    function clearRadioSelection(name) {
        document.querySelectorAll('input[name="' + name + '"]').forEach(function(elem) {
            elem.checked = false;
        });
    }

    // Helper to set required attribute on radio group
    function setRequiredForRadioGroup(name, required) {
        document.querySelectorAll('input[name="' + name + '"]').forEach(function(elem) {
            if (required) {
                elem.setAttribute('required', 'required');
            } else {
                elem.removeAttribute('required');
            }
        });
    }

        
         document.getElementById('continue_no').addEventListener('click', function() {
        var exitReasonField = document.getElementById('exit_reason');
        var exitReasonContainer = document.getElementById('exit_reason_container');
        exitReasonContainer.style.display = 'block';
        exitReasonField.setAttribute('required', 'required'); // Mark as required when 'No' is selected
    });

    document.getElementById('continue_yes').addEventListener('click', function() {
        var exitReasonField = document.getElementById('exit_reason');
        var exitReasonContainer = document.getElementById('exit_reason_container');
        exitReasonContainer.style.display = 'none';
        exitReasonField.removeAttribute('required'); // Remove required when 'Yes' is selected
    });
    </script>
</body>
</html>
