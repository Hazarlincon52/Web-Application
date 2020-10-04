
function myFunction(){
    var weight = parseInt(document.getElementById("kg").value);
    var height = parseInt(document.getElementById("cm").value);
    var blood = document.getElementById("blood").value;
    var fat = parseInt(document.getElementById("fat").value);
    var obat = document.getElementById("obat").value;
    var tujuan = document.getElementById("body").value;
    var tujuan1 = document.getElementById("body").value;
    var tujuan2 = document.getElementById("body").value;
    var tujuan3 = document.getElementById("body").value;
    var result1 = height - 110;
    var result2 = height - 90;

    //waring
    if(weight == null || height == null || fat == 0 || blood == "none" || tujuan == "none" || obat == "none"){
        document.getElementById("demo").innerHTML = "&emsp; Tidak Boleh ada field yang kosong!";
    }
    else if(isNaN(weight)){
        document.getElementById("demo").innerHTML = "&emsp; Berat Badan Tidak Boleh berbentuk kata!";   
    }
    else if(isNaN(height)){
        document.getElementById("demo").innerHTML = "&emsp; Tinggi Badan Tidak Boleh berbentuk kata!";
    }
    else{
        document.getElementById("result2").innerHTML = "&emsp;Target berat tubuh anda yang ideal adalah "+result1+" - "+result2+" Kg";
    }
    

    //bagian penentuan olahraga
    if(tujuan3 == "Menuruntkan_Berat_Tubuh"){
        if(weight >= 50 && weight <= 80){
            document.getElementById("demo2").innerHTML = "&emsp;1. Jumping Jacks X30 <br>&emsp;2.Squats X20 <br>&emsp;3. Push Up X10 <br>&emsp;4. Climber X30 <br>&emsp;5. Plank Jump-Ins X10 <br>&emsp;6. High Knees X30 <br>&emsp;7. Knee Pull-Ins X10 <br>&emsp;8. Cross Crunches X20 <br>&emsp;9. Leg Raises X10";
        }
        else if(weight >= 81 && weight <= 120){
            document.getElementById("demo2").innerHTML = "&emsp;1. Jumping Jacks X30 <br>&emsp;2.Squats X20 <br>&emsp;3. Push Up X10 <br>&emsp;4. Climber X30 <br>&emsp;5. Plank Jump-Ins X10 <br>&emsp;6. High Knees X30 <br>&emsp;7. Knee Pull-Ins X10 <br>&emsp;8. Cross Crunches X20 <br>&emsp;9. Leg Raises X10";
        }
        else if(weight >= 121 && weight <= 140){
            document.getElementById("demo2").innerHTML = "&emsp;Lakukan Pada Bulan 1 - 2<br>&emsp;1. Half Jacks X10 <br>&emsp;2. Jump Squats X4 <br>&emsp;3. Half Jacks X10 <br>&emsp;4. Bounces X20 <br>&emsp;5. Half Jacks X10 <br>&emsp;6. Bounces X20 <br>&emsp;7. Half Jacks X10 <br>&emsp;8. Jump Squats X4 <br>&emsp;9. Half Jacks X10 ";
            document.getElementById("demo3").innerHTML = "&emsp;Lanjutkan pada bulan selanjutnya. <br>&emsp;1. Jumping Jacks X30 <br>&emsp;2.Squats X20 <br>&emsp;3. Push Up X10 <br>&emsp;4. Climber X30 <br>&emsp;5. Plank Jump-Ins X10 <br>&emsp;6. High Knees X30 <br>&emsp;7. Knee Pull-Ins X10 <br>&emsp;8. Cross Crunches X20 <br>&emsp;9. Leg Raises X10 ";
        }
        else{
            document.getElementById("demo2").innerHTML = "&emsp;Berat badan tidak menentu atau berat badan memcapai maksimum perhitungan ";
        }
    }
    else if(tujuan3 == "Menjaga_Kebugaran_Tubuh"){
        if(weight >= 40 && weight <= 80){
            document.getElementById("demo2").innerHTML = "&emsp;1. Half Jacks X20 <br>&emsp;2. Squats X20 <br>&emsp;3. Plank Jump-Ins X10 <br>&emsp;4. Climbers X20 <br>&emsp;5.Lunges X20 <br>&emsp;6. Flutter Kicks X10";
        }
        else if(weight >= 81 && weight <= 120){
            document.getElementById("demo2").innerHTML = "&emsp;1. Half Jacks X20 <br>&emsp;2. Squats X10 <br>&emsp;3. Plank Jump-Ins X10 <br>&emsp;4. Climbers X20 <br>&emsp;5. Lunges X10 <br>&emsp;6. Flutter Kicks X10";
        }
        else{
            document.getElementById("demo2").innerHTML = "&emsp;Berat badan tidak menentu atau berat badan memcapai maksimum perhitungan ";
        }
    }
    else if(tujuan3 == "Membentuk_Otot_Tubuh"){
        if(weight >= 40 && weight <= 80){
            document.getElementById("demo2").innerHTML = "&emsp;1. Push Up X10<br>&emsp;2. Double Chest Expansions X20<br>&emsp;3. Power Push Up X5<br>&emsp;4. Lunge X10<br>&emsp;5. Leg Raises X10<br>&emsp;6. Cross Crunches X20<br>&emsp;7. Squat X20<br>&emsp;8. Wall Sit 20 Detik<br>&emsp;9. Calf Raises X20"
        }
        else if(weight >= 81 && weight <= 120){
            document.getElementById("demo2").innerHTML = "&emsp;Lakukan Pada Bulan 1 - 2<br>&emsp;1. Half Jacks X10 <br>&emsp;2. Jump Squats X4 <br>&emsp;3. Half Jacks X10 <br>&emsp;4. Bounces X20 <br>&emsp;5. Half Jacks X10 <br>&emsp;6. Bounces X20 <br>&emsp;7. Half Jacks X10 <br>&emsp;8. Jump Squats X4 <br>&emsp;9. Half Jacks X10 ";
            document.getElementById("demo3").innerHTML = "&emsp;Lanjutkan pada bulan selanjutnya. <br>&emsp;1. Push Up X10<br>&emsp;2. Double Chest Expansions X20<br>&emsp;3. Power Push Up X5<br>&emsp;4. Lunge X10<br>&emsp;5. Leg Raises X10<br>&emsp;6. Cross Crunches X20<br>&emsp;7. Squat X20<br>&emsp;8. Wall Sit 20 Detik<br>&emsp;9. Calf Raises X20"
        }
        else{
            document.getElementById("demo2").innerHTML = "&emsp;Berat badan tidak menentu atau berat badan memcapai maksimum perhitungan ";
        }
    }

    // kurangin 1 rep di pemulaan.
    if(blood == "A+" || blood == "A-"){
        if(fat == 8 || fat  == 12){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 2 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 15 || fat  == 20){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 2 Rep <br> &emsp;Bulan 5 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 2 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 25 || fat  == 30){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 3 Rep <br> &emsp;Bulan 6 : 4 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br>&emsp; Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 2 Rep <br> &emsp;Bulan 5 : 3 Rep <br> &emsp;Bulan 6 : 4 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 35 || fat  == 40){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 3 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 2 Rep <br> &emsp;Bulan 4 : 2 Rep <br> &emsp;Bulan 5 : 3 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 45){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 1 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 4 Rep <br> &emsp;Bulan 8 : 5 Rep <br> &emsp;Bulan 9 : 5 Rep <br> &emsp;Bulan 10 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
    }

    // tambah 1 rep di pemulaan.
    else if(blood == "B+" || blood == "B-" || blood == "AB+" || blood == "AB-"){
        if(fat == 8 || fat  == 12){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 2 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 15 || fat  == 20){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep <br> &emsp;Bulan 5 : 4 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 25 || fat  == 30){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu,30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 35 || fat  == 40){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 3 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 5 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih ";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 4 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 5 Rep <br> &emsp;Bulan 7 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 45){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 4 Rep <br> &emsp;Bulan 8 : 5 Rep <br> &emsp;Bulan 9 : 5 Rep <br> &emsp;Bulan 10 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
    }

    // standart rep.
    else if(blood == "O+" || blood == "O-"){
        if(fat == 8 || fat  == 12){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 2 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 15 || fat  == 20){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br>&emsp; Bulan 5 : 4 Rep ";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 2 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 25 || fat  == 30){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 35 || fat  == 40){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
        else if(fat == 45){
            if(tujuan == "Menuruntkan_Berat_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 1 Rep <br> &emsp;Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 4 Rep <br> &emsp;Bulan 8 : 5 Rep <br> &emsp;Bulan 9 : 5 Rep <br> &emsp;Bulan 10 : 6 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;6 hari dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Membentuk_Otot_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Bulan 1 : 2 Rep <br>&emsp; Bulan 2 : 2 Rep <br> &emsp;Bulan 3 : 3 Rep <br> &emsp;Bulan 4 : 3 Rep <br> &emsp;Bulan 5 : 4 Rep <br> &emsp;Bulan 6 : 4 Rep <br> &emsp;Bulan 7 : 5 Rep <br> &emsp;Bulan 8 : 5 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;5 hari atau lebih dalam 1 minggu, 1 - 2 jam atau lebih";
            }
            else if(tujuan == "Menjaga_Kebugaran_Tubuh"){
                document.getElementById("demo1").innerHTML = "&emsp;Perolahraga 3 Rep";
                document.getElementById("demo6").innerHTML = "&emsp;3 hari atau lebih dalam 1 minggu, 30 menit - 1 jam atau lebih";
            }
        }
    }

    //penentuan Diet 
    if(tujuan1 == "Menuruntkan_Berat_Tubuh"){
        document.getElementById("demo5").innerHTML = "&emsp;Istriahat 1-2 menit perrep";
        document.getElementById("demo7").innerHTML = "&emsp;Plan A<br>&emsp;Karbohidrat = 10% <br>&emsp;Protein = 40% <br>&emsp;Lemak = 0% <br>&emsp;Sayur-sayuran dan buah-buahan : 50% ";
    }
    else if(tujuan1 == "Menjaga_Kebugaran_Tubuh"){
        document.getElementById("demo5").innerHTML = "&emsp;Istriahat 1-2 menit perrep";
        document.getElementById("demo7").innerHTML = "&emsp;Plan B<br>&emsp;Karbohidrat = 30% <br>&emsp;Protein = 30% <br>&emsp;Lemak = 10% <br>&emsp;Sayur-sayuran dan buah-buahan : 30% ";
    }
    else if(tujuan1 == "Membentuk_Otot_Tubuh"){
        document.getElementById("demo5").innerHTML = "&emsp;Istriahat 1-2 menit perrep  saat melakukan rep lebih dari 3, Istriahat 3-4 menit perrep";
        document.getElementById("demo7").innerHTML = "&emsp;Plan C<br>&emsp;Karbohidrat = 20% <br>&emsp;Protein = 40% <br>&emsp;Lemak = 10% <br>&emsp;Sayur-sayuran dan buah-buahan : 30% ";
    }
    
    //penjelasan
    if(tujuan2 == "Menuruntkan_Berat_Tubuh"){
        document.getElementById("result1").innerHTML = "&emsp;Olahraga yang di lakukan adalah dengan olahraga lantai yang akan mengfokuskan penurunan berat badan dan lemak tubuh, dengan diet yang dilakukan akan membantu melancarkan dan mempercepat penurunan berat badan dan lemak, Penjelasaan melakukan Olahraga ada di menu (Teknik Olahraga) dan Penjelasan melakukan diet ada di menu(Diet Plan).";
    }
    else if(tujuan2 == "Menjaga_Kebugaran_Tubuh"){
        document.getElementById("result1").innerHTML = "&emsp;Olahraga yang di lakukan adalah dengan olahraga lantai yang akan mengfokuskan penjagaan kebugaraan tubuh yang berlangsung pada kehidup anda, dengan diet yang dilakukan akan membantu menstabilkan nutrisi dan nilai gizi pada tubuh anda, Penjelasaan melakukan Olahraga ada di menu (Teknik Olahraga) dan Penjelasan melakukan diet ada di menu(Diet Plan).";
    }
    else if(tujuan2 == "Membentuk_Otot_Tubuh"){
        document.getElementById("result1").innerHTML = "&emsp;Olahraga yang di lakukan adalah dengan olahraga lantai yang akan mengfokuskan penigkatan otot tubuh pada bagian upper, core, dan lower tubuh semaksimal mungkin, dengan diet yang dilakukan akan membantu menstabilkan nutrisi, nilai gizi, kadar lemak dan peningkatan berat pada tubuh anda, Penjelasaan melakukan Olahraga ada di menu (Teknik Olahraga) dan Penjelasan melakukan diet ada di menu(Diet Plan).";
    }

    

}