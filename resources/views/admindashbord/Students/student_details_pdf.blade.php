<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100&display=swap" rel="stylesheet">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        #kh {
            font-family: 'khmer', serif;
            font-size: 38px;

        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>
                <h2>Damrong Learning</h2>
            </td>
            <td style="width: 80px;"></td>
            <td style="width: 80px;"></td>
            <td style="width: 50px;"></td>
            <td>
                <h2>Damrong School ERP</h2>
                <p>School Address</p>
                <p>Phone : 011547136</p>
                <p>Email : support@damrong.com</p>
            </td>
        </tr>
    </table>

    <table id="customers">
        <tr>
            <th width="10%">SL</th>
            <th width="45%">Student Details</th>
            <th width="45%">Student Data</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Student Name</td>
            <td id="kh">{{$details['student']['name']}}</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Student ID No</td>
            <td>{{$details['student']['id_no']}}</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Father's Name</td>
            <td>{{$details['student']['fname']}}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mother's Name</td>
            <td>{{$details['student']['mname']}}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Mobile Number</td>
            <td>{{$details['student']['mobile']}}</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Address</td>
            <td>{{$details['student']['address']}}</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Gender</td>
            <td>{{$details['student']['gender']}}</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Religion</td>
            <td>{{$details['student']['religion']}}</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Date of Birth</td>
            <td>{{$details['student']['dob']}}</td>
        </tr>

    </table>
    <br> <br>
    <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

</body>

</html>
