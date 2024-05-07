<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form with 25 Fields</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">




    <style>
    .selction-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    /* border: 1px solid #ccc; */
    border-radius: 5px;
}

label ,
#gender{
  display: block;
  margin-bottom: 10px;
}

input[type='text'],
input[type='date'],
#gender {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0f100f;
}

select {
    width: 200px; /* Adjust the width as needed */
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.button-container {
    display: inline-block; /* Allows the buttons to be displayed inline */
}

.button-green {
    background-color: rgb(238, 241, 238);
    color: rgb(12, 12, 12);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    margin-right: 10px; /* Add margin between buttons */
}

.button-blue {
    background-color: rgb(12, 12, 12);
    color: rgb(247, 242, 242);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
}

    </style>
    </head>
    <body>
        <div class="selction-form">

            <div class="logo-container">
                <img src="Marqs_Logo.webp" alt="Marqs_Logo" class="logo">
            </div>

            <label for="field1">Name / الاسم *</label>
            <input type="text" id="field1" name="field1" required>

            <!-- Field 2 -->
            <label for="field2">Date Of Birth / تاريخ الميلاد *</label>
            <input type="date" id="field2" name="field2" required>
            <form action="submit.php" method="post">
                <label for="gender" style="display: block;">Gender / النوع
                    *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label"
                        for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline"
                    style="margin-bottom: 10px;">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label"
                        for="inlineRadio2">Female</label>
                </div>

                <label for="field3" style="display: block;">Nationality /
                    الجنسيه *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Mobile Number / رقم المحمول *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="gender" style="display: block;">National ID/Passport
                    / بطاقة الرقم القومي او جواز السفر *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label"
                        for="inlineRadio1">National ID</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label"
                        for="inlineRadio2">Passport ID</label>
                </div>
                <label for="field3" style="display: block;">National ID / الرقم
                    القومي *</label>
                <input type="text" id="field3" name="field3" required>
                <label for="field3" style="display: block;">Passport ID / رقم
                    جواز السفر *</label>
                <input type="text" id="field3" name="field3" required>
                <label for="field3" style="display: block;">National ID (Front)
                    / وجه بطاقة الرقم القومي *</label>
                <input type="file" id="national_id_front"
                    style="display: none;">
                <label for="national_id_front"
                    class="w-fit cursor-pointer rounded border border-dashed border-black bg-transparent px-4 py-2 font-bold hover:bg-gray-100">Upload
                    Document</label>
                <label for="field3" style="display: block;">National ID (Back)
                    / ظهر بطاقه الرقم القومي *</label>
                <input type="file" id="national_id_front"
                    style="display: none;">
                <label for="national_id_front"
                    class="w-fit cursor-pointer rounded border border-dashed border-black bg-transparent px-4 py-2 font-bold hover:bg-gray-100">Upload
                    Document</label>
                <label for="field3" style="display: block;">Passport / جواز
                    السفر *</label>
                <input type="file" id="national_id_front"
                    style="display: none;">
                <label for="national_id_front"
                    class="w-fit cursor-pointer rounded border border-dashed border-black bg-transparent px-4 py-2 font-bold hover:bg-gray-100">Upload
                    Document</label>

                <label for="field3" style="display: block;">Residency Address /
                    عنوان السكن *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Email / البريد الالكتروني *</label>
                <input type="text" id="field3" name="field3" required>
                <label for="gender">Employment Status / الحالة الوظيفية
                    *</label>
                <select id="gender" name="gender">
                    <option>Employed</option>
                    <option>Self Employed</option>
                    <option>Retired</option>
                    <option>Student</option>
                    <option>Housewife</option>
                    <option>Not Employed</option>
                </select>

                <label for="field3">Years Of Employment / عدد سنين التوظيف
                    *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Job Title / المسمي الوظيفي *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Employer Name / اسم مكان العمل *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">University / الجامعة *</label>
                <input type="text" id="field3" name="field3" required>
                <label for="gender">Marital Status / الحالة الاجتماعية *</label>
                <select id="gender" name="gender">
                    <option>Single</option>
                    <option>Married</option>
                </select>
                <label for="gender" style="display: block;">National ID/Passport
                    Have Children? / هل لديك اطفال؟ *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label"
                        for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline"
                    style="display: block;">
                    <input class="form-check-input" type="radio"
                        name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label"
                        for="inlineRadio2">No</label>
                </div>

                <input style="width: 48%;" type="number" id="field3"
                    name="field3" required>
                <input style="width: 48%;" type="text" id="field3" name="field3"
                    required placeholder="School/University">

                <button style="margin-bottom: 5px;"
                    class="w-fit cursor-pointer rounded border border-dashed border-black bg-transparent px-4 py-2 font-bold hover:bg-gray-100"
                    type="button">Add Child</button>

                <label for="field3" style="display: block;">Husband/Wife Job
                    Title / المسمي الوظيفي
                    للزوج او الزوجة *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Husband/Wife University / جامعة الزوج او
                    الزوجة *</label>
                <input type="text" id="field3" name="field3" required>

                <label for="field3">Club(S) Membership / عضوية
                    النادي/الاندية</label>
                <input type="text" id="field3" name="field3" required>
                <label for="gender">Properties In Cairo / الوحدات في القاهرة
                    *</label>
                <select id="gender" name="gender">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10+</option>
                </select>

                <label for="gender">Properties In North Cost / الوحدات في الساحل
                    الشمالي *</label>
                <select id="gender" name="gender">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10+</option>
                </select>

                <label for="gender">Properties Outside Egypt / الوحدات خارج مصر
                    *</label>
                <select id="gender" name="gender">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10+</option>
                </select>

                <label for="field3">Number Of Units Interested In / عدد الوحدات
                    المهتم بهم *</label>
                <input type="text" id="field3" name="field3" required>
                <label for="gender" style="display: block;">National ID/Passport
                    / بطاقة الرقم القومي او جواز السفر *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"
                        id="inlineCheckbox1" value="option1">
                    <label class="form-check-label"
                        for="inlineCheckbox1">Chalet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"
                        id="inlineCheckbox2" value="option2">
                    <label class="form-check-label"
                        for="inlineCheckbox2">TownHouse</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"
                        id="inlineCheckbox2" value="option2">
                    <label class="form-check-label"
                        for="inlineCheckbox2">Standalone</label>
                </div>
                <label for="gender">Payment Method / طريقة الدفع *</label>
                <select id="gender" name="gender">
                    <option>Cash</option>
                    <option>Cheque</option>
                    <option>Instapay</option>
                    <option>Vise</option>
                    <option>Bank</option>
                </select>

            </form>
            <div class="button-container">
                <button class="button-green">Clear</button>
                <button class="button-black">Submit</button>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>
