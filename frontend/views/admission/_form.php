<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admission */
/* @var $form yii\widgets\ActiveForm */
/* @var $this yii\web\View */


$this->title = $model->adminId;

?>
<section class="admission">

    <section class="account p-4">
        <div class="container  ">
            <?php $form = ActiveForm::begin(); ?>
            <div class="   order">
                <div class="card p-3 shadow-sm" style="width: 100%;">
                    <div class="container">
                        <div class="mb-3 container mt-5">
                            <p class=" text-center mb-4" style="font-weight: bold; font-size: 20px">1. Enter Your Details</p>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <label for="firstName" class="form-label">First Name <span class="astres"> *</span></label>
                                    </div>
                                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'placeholder' => 'First Name'])->label(false) ?>
                                    <!-- <input type="text" class="form-control" placeholder="First name" id="firstName" aria-describedby="emailHelp"> -->
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <label for="lastName" class="form-label">Last Name <span class="astres"> *</span></label>
                                    </div>
                                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'placeholder' => 'Last Name'])->label(false) ?>
                                    <!-- <input type="email" class="form-control" placeholder="Last Name" id="lastName" aria-describedby="emailHelp"> -->
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <label for="email" class="form-label">Email <span class="astres"> *</span></label>
                                    </div>
                                    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Eail Adress'])->label(false) ?>
                                    <!-- <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="emailHelp"> -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class">Class Dates <span class="astres"> *</span></label>
                                        <!-- <select class="form-control" id="class">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select> -->
                                        <?= $form->field($model, 'class_dates')->dropDownList(['February 14 to March 25' => 'February 14 to March 25', 'May 30 to July 20th' => 'May 30 to July 20th',], ['prompt' => '--select--'])->label(false) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class">Gender <span class="astres"> *</span></label>
                                        <!-- <select class="form-control" id="class">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>I prefer not to say</option>
                                    </select> -->
                                        <?= $form->field($model, 'gender')->dropDownList(['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other',], ['prompt' => '--select--'])->label(false) ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <label for="phone" class="form-label">Phone Number <span class="astres"> *</span></label>
                                        <div class="astres ml-2">*</div>
                                    </div>
                                    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true, 'placeholder' => 'Phone Number'])->label(false) ?>
                                    <!-- <input type="number" class="form-control" placeholder="Phone Number" id="phone" aria-describedby="emailHelp"> -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from">Where are you from? <span class="astres"> *</span></label>
                                        <!-- <select class="form-control" id="from">
                                        <option>Central</option>
                                        <option>Costal</option>
                                        <option>Eastern</option>
                                        <option>Nairobi</option>
                                        <option>North Eastern</option>
                                        <option>Nyanza</option>
                                        <option>Rift Valley</option>
                                        <option>Western</option>
                                        <option>Outside Kenya</option>
                                    </select> -->
                                        <?= $form->field($model, 'place')->dropDownList(['Costal' => 'Costal', 'Central' => 'Central', 'Eastern' => 'Eastern', 'Nairobi' => 'Nairobi', 'North Eastern' => 'North Eastern', 'Nyanza' => 'Nyanza', 'Rift Valley' => 'Rift Valley', 'Western' => 'Western', 'Outside Kenya' => 'Outside Kenya',], ['prompt' => '--select--'])->label(false) ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hear">Where are you from? <span class="astres"> *</span></label>
                                        <!-- <select class="form-control" id="hear">
                                        <option>Facebook</option>
                                        <option>Intagram</option>
                                        <option>Twitter</option>
                                        <option>Google Search</option>
                                        <option>From the website</option>
                                    </select> -->
                                        <?= $form->field($model, 'advert_place')->dropDownList(['Twitter' => 'Twitter', 'Facebook' => 'Facebook', 'Good Search' => 'Good Search', 'From our website' => 'From our website',], ['prompt' => '--select--'])->label(false) ?>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="text-center">
                        <a class="btn nav-btn" href="./success.html" style="border-radius: 5px; font-size: 14px;" type="button">
                            Sign In
                        </a>
                    </div> -->
                        </div>

                        <div class="container">
                            <div class="mb-3 container mt-5">
                                <p class=" text-center mb-4" style="font-weight: bold; font-size: 20px">2. Next of Kin Details</p>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <label for="firstName" class="form-label">Name <span class="astres"> *</span></label>
                                        </div>
                                        <?= $form->field($model, 'kin_name')->textInput(['maxlength' => true, 'placeholder' => 'Name'])->label(false) ?>
                                        <!-- <input type="text" class="form-control" placeholder="First name" id="firstName" aria-describedby="emailHelp"> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <label for="lastName" class="form-label">Phone Number <span class="astres"> *</span></label>
                                        </div>
                                        <?= $form->field($model, 'kin_phone')->textInput(['maxlength' => true, 'placeholder' => 'Phone'])->label(false) ?>
                                        <!-- <input type="number" class="form-control" placeholder="Phone Number" id="lastName" aria-describedby="emailHelp"> -->
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <label for="rlship" class="form-label">Relationship <span class="astres"> *</span></label>
                                        </div>
                                        <?= $form->field($model, 'kin_relationship')->textInput(['maxlength' => true, 'placeholder' => 'Relationship'])->label(false) ?>
                                        <!-- <input type="text" class="form-control" placeholder="Email" id="rlship" aria-describedby="emailHelp"> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <label for="email" class="form-label">Email Address <span class="astres"> </span></label>
                                        </div>
                                        <?= $form->field($model, 'kin_email')->textInput(['maxlength' => true, 'placeholder' => 'Email'])->label(false) ?>
                                        <!-- <input type="email" class="form-control" placeholder="Email Address" id="email" aria-describedby="emailHelp"> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="mb-3 container mt-5">
                                <p class=" text-center mb-4" style="font-weight: bold; font-size: 20px">3. You're almost done</p>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hear">How do you access the internet?* <span class="astres"> *</span></label>
                                            <!-- <select class="form-control" id="hear">
                                            <option>I got another place with internet</option>
                                            <option>I use my smart phone </option>
                                            <option>I have another wifi</option>
                                        </select> -->
                                            <?= $form->field($model, 'internet_access')->dropDownList(['I got a cyber cafe or another place with internet' => 'I got a cyber cafe or another place with internet', 'I use my smartphone' => 'I use my smartphone', 'I have wifi at home' => 'I have wifi at home', '' => '',], ['prompt' => '--select--'])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hear">How often do you have access to the internet?*<span class="astres"> *</span></label>
                                            <!-- <select class="form-control" id="hear">
                                            <option>Unlimited</option>
                                            <option>Daily</option>
                                            <option>A few hours a day</option>
                                            <option>Few days per week</option>
                                            <option>Less than once per week</option>
                                        </select> -->
                                            <?= $form->field($model, 'internet_limit')->dropDownList(['Daily unlimited access' => 'Daily unlimited access', 'Afew hours a day' => 'Afew hours a day', 'A few days per week' => 'A few days per week', 'Less than once per week' => 'Less than once per week',], ['prompt' => '--select--'])->label(false) ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="mt-5 mb-5 text-center">
                            <!-- <div class="mybtn btn rounded-pill ">
                            Submit Form
                        </div> -->
        
                            <?= Html::submitButton('Submit Form', ['class' => 'mybtn btn rounded-pill']) ?>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
    </section>
    <!-- /.MultiStep Form -->
</section>
<!-- <div class="admission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_dates')->dropDownList(['February 14 to March 25' => 'February 14 to March 25', 'May 30 to July 20th' => 'May 30 to July 20th',], ['prompt' => '']) ?>

    <?= $form->field($model, 'gender')->dropDownList(['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other',], ['prompt' => '']) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->dropDownList(['Costal' => 'Costal', 'Central' => 'Central', 'Eastern' => 'Eastern', 'Nairobi' => 'Nairobi', 'North Eastern' => 'North Eastern', 'Nyanza' => 'Nyanza', 'Rift Valley' => 'Rift Valley', 'Western' => 'Western', 'Outside Kenya' => 'Outside Kenya',], ['prompt' => '']) ?>

    <?= $form->field($model, 'advert_place')->dropDownList(['Twitter' => 'Twitter', 'Facebook' => 'Facebook', 'Good Search' => 'Good Search', 'From our website' => 'From our website',], ['prompt' => '']) ?>

    <?= $form->field($model, 'kin_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kin_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kin_relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kin_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'internet_access')->dropDownList(['I got a cyber cafe or another place with internet' => 'I got a cyber cafe or another place with internet', 'I use my smartphone' => 'I use my smartphone', 'I have wifi at home' => 'I have wifi at home', '' => '',], ['prompt' => '']) ?>

    <?= $form->field($model, 'internet_limit')->dropDownList(['Daily unlimited access' => 'Daily unlimited access', 'Afew hours a day' => 'Afew hours a day', 'A few days per week' => 'A few days per week', 'Less than once per week' => 'Less than once per week',], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
 -->
