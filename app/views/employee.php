<?php
$employeeArray = json_decode(json_encode($data), true);

?>

<form id="employee-form" method="POST" action="http://localhost/php-employee-management-v2/employee/save" class="container">
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputName4">Name</label>
            <input required type="text" class="form-control" id="inputName4" name="name" placeholder="Name" value=<?php if (isset($employeeArray)) echo ($employeeArray['name']); ?>>
        </div>
        <div class="form-group col-sm-6">
            <label for="inputLastName4">Last Name</label>
            <input required type="text" class="form-control" id="inputLastName4" name="last_name" placeholder="Last Name" value=<?php if (isset($employeeArray)) echo ($employeeArray['last_name']); ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputEmail4">Email</label>
            <input required type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" value=<?php if (isset($employeeArray)) echo ($employeeArray['email']); ?>>
        </div>
        <div class="form-group col-sm-6">
            <label for="inputGender">Gender</label>
            <select required id="inputGender" name="gender" class="form-control">
                <?php if (isset($employeeArray) && $employeeArray['gender'] === 'male') {
                    echo '<option selected value="man">Man</option>
                    <option value="woman">Woman</option>';
                } elseif (isset($employeeArray) && $employeeArray['gender'] === 'female') {
                    echo '<option value="man">Man</option>
                    <option selected value="woman">Woman</option>';
                } else {
                    echo '<option></option>
                    <option value="male">Man</option>
                    <option value="female">Woman</option>';
                } ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputCity4">City</label>
            <input required type="text" class="form-control" id="inputCity4" name="city" placeholder="Barcelona" value=<?php if (isset($employeeArray)) echo ($employeeArray['city']); ?>>
        </div>
        <div class="form-group col-sm-6">
            <label for="inputAddress4">Street Address</label>
            <input required type="text" class="form-control" id="inputAddress4" name="street_address" placeholder="Carrer de ..." value=<?php if (isset($employeeArray)) echo ($employeeArray['street_address']); ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputState4">State</label>
            <input required type="text" class="form-control" id="inputState4" name="state" placeholder="Barcelona" value=<?php if (isset($employeeArray)) echo ($employeeArray['state']); ?>>
        </div>
        <div class="form-group col-sm-6">
            <label for="inputAge4">Age</label>
            <input required type="number" class="form-control" id="inputAge4" min="16" max="67" name="age" placeholder="24" value=<?php if (isset($employeeArray)) echo ($employeeArray['age']); ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputPostal4">Postal Code</label>
            <input required type="number" class="form-control" id="inputPostal4" name="postal_code" placeholder="08001" value=<?php if (isset($employeeArray)) echo ($employeeArray['postal_code']); ?>>
        </div>
        <div class="form-group col-sm-6">
            <label for="inputPhone4">Phone Number</label>
            <input required type="tel" class="form-control" id="inputPhone4" name="phone_number" placeholder="692 222 555" value=<?php if (isset($employeeArray)) echo ($employeeArray['phone_number']); ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Return</button>
        </div>
    </div>
</form>