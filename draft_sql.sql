SELECT * FROM `results` WHERE admno = 'pc0123';

<label for="admno">Admission No:</label><br>
        <input type="text" name="admno" id="admno" placeholder="Eg. PC0123" required/><br>


UPDATE `results` SET `gender` = 'Female' WHERE `results`.`id` = 3;