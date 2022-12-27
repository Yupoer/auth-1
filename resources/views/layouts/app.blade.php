<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '學分計算機') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        @import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css );

        body.login {
            background-color: #DCDDDF;
            font-family: 'cwTeXYen';
        }

        h2.login {
            line-height: 50px;
            text-align: center;
            font-size: 35px;
            color: #75809C;
        }


        .loginfield {
            border-color: white;
            width: 180px;
            height: 20px;
            font-size: 10px;
        }

        .loginfield:focus {
            outline-color: #BECBD3;
        }

        a:hover {
            background-color: #BFC2CB;
            color: white;
        }
        .content {
            position: relative;
            text-align: right;
            font-size: 18px;
            left: -15%;
        }

        .loginword {
            line-height: 50px;
            color: #75809C;
        }

        .loginframe {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #8E9BAE;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vw;
            width: 45vw;
        }

        .logincontent {
            font-size: 16px;
        }

        .loginminor {
            line-height: 50px;
            text-align: center;
            font-size: 15px;
        }

        .loginbutton {
            position: relative;
            background-color: #BFC2CB;
            border-color: #BFC2CB;
            width: 150px;
            height: 30px;
            left: 50%;
            top: 20px;
            transform: translate(-50%, -50%);
        }

        .loginbutton:hover {
            background-color: white;
        }




        body.home {
            background-color: #EAE0D7;
            margin: 0;
        }

        .up {
            position: absolute;
            width: 100%;
        }

        .logd {
            position: relative;
            bottom: 0px;
        }

        .logout {
            position: relative;
            float: right;
            width: 50%;
            background-color: #E0DFE4;
            border-color: #BDC4CC;
        }


        /*****************************個人資料***********************************/
        .card {
            width: 10vw;
            height: 14vh;
            background-color: #D0DCDD;
        }


        /*****************************學年***********************************/
        .semester {
            width: 40vw;
            height: 25vh;
            position: relative;
            left: 5px;
        }

        .sem_in {
            right: 0px;
            width: 100%;
            height: 40%;
            position: relative;
            top: 50%;
            transform: translate(0, -50%);
        }



        /***************************學分分類*********************************/
        .typesetting {
            position: relative;
            float: right;
            width: 45vw;
            height: 25vh;
            right: 20px;
        }

        .group {
            position: relative;
            width: 100%;
            height: 75%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .credit {
            float: left;
            margin-left: 2vw;
            height: 9vw;
            width: 9vw;
            text-align: center;
            font-family: 'cwTeXYen';
            font-size: 30px;
            cursor: pointer;
            background-color: #C3AAA6;
        }

        /****************************************************************/

        table {
            border-collapse: collapse;
            font-family: 'cwTeXYen';
        }

        /****************資料庫********************/
        select {
            background-color: #DFF7E6;
            border-color: #D2D2D0;
            width: 30%;
        }

        .search {
            position: relative;
            width: 65%;
            height: 20px;
            font-size: 10px;
        }

        #clear {
            position: relative;
            width: 150px;
            background-color: #E0DFE4;
            border-color: #A8B2AA;
            font-family: 'cwTeXYen'
        }

        .seardiv {
            float: left;
            position: relative;
            right: 0px;
        }

        .searword {
            background-color: #DFF7E6;
        }

        .database {
            overflow: auto auto;
            position: relative;
            bottom: 0px;
            margin: 20px;
            height: 90%;
            width: 100%;
        }

        .data-in {
            position: relative;
            width: 100%;
            left: 50%;
            bottom: 0px;
            transform: translate(-50%, 0%);
        }

        .lefbot {
            font-family: 'cwTeXYen';
            position: absolute;
            width: 20vw;
            height: 75vh;
            bottom: 15px;
        }

        .lefbot_in {
            position: relative;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        .selgroup {
            position: relative;
            height: 10%;
            width: 100%;
            left: 10px;
            float: left;
        }

        /***************課表********************/

        .wrapper {
            position: absolute;
            float: left;
            bottom: 0px;
            right: 10px;
            background-color: #ddd0c8;
            width: 75vw;
            height: 70vh;
            padding: 0;
            margin: 20px;
            white-space: nowrap;
        }

        .arrows {
            width: 10%;
            height: 70vh;
            line-height: 70vh;
            text-align: center;
            overflow: hidden;
            float: left;
        }

        .arrow {
            cursor: pointer;
            border: 0;
            width: 100%;
            height: 70vh;
            font-weight: bolder;
            font-size: 40px;
            color: #A08887;
            background-color: #ddd0c8;
        }

        ::-webkit-scrollbar-corner {
            background-color: #EAE0D7;
        }

        ::-webkit-scrollbar-track-piece {
            background: transparent;
        }

        ::-webkit-scrollbar {
            height: 10px;
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 20px;
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .row1 {
            background-color: #C7A9A1;
        }

        .club {
            position: relative;
            box-sizing: border-box;
            height: 90px;
            width: calc(75vw*0.8/8);
            text-align: center;
        }

        .field {
            font-size: 40px;
            color: #D3BBB7;
        }

        .subfield {
            height: 100px;
            width: 100px;
            border: 3px;
            border-style: solid;
            border-color: #D3BBB7;
            color: #8D6B61;
            float: left;
            margin: 20px;
            font-size: 30px;
        }

        .requiredclass {
            font-size: 25px;
            color: #8D6B61;
        }

        .optionalclass {
            font-size: 40px;
            color: #8D6B61;
            line-height: 150px;
        }

        .cross {
            position: relative;
            top: -50px;
            right: -400px;
            cursor: pointer;
            font-size: 30px;
            color: #9297AB;
        }

        .grouppop {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        .popup {
            box-sizing: border-box;
            background-color: #E6DEDC;
            border: 3px;
            border-style: solid;
            border-color: #D3BBB7;
            padding-left: 150px;
            padding-right: 150px;
            display: none;
            width: 900px;
            height: 500px;
            text-align: center;
            font-family: 'cwTeXYen';
        }

        .type {
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }



        .strip {
            padding: 0;
            margin: 0;
            float: left;
            height: 100%;
            width: 100%;
            overflow: hidden auto;
            white-space: nowrap;
        }

        .numWrap {
            float: left;
            height: 100%;
            width: 80%;
            overflow: hidden;
        }

        .tableclass {
            display: inline-block;
            width: calc(75vw*0.8);
            height: 100%;
        }

    </style>

    
</head>

<script>
        $('head').append('<link rel="stylesheet" type="text/css" href="style_table.css">');
        //if (!document.getElementById) document.write('<link rel="stylesheet" type="text/css" href="style_table.css">');
        let week = ["星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"];
        let array = ["一", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "十二", "十三", "十四"];
        let now = '';
        let semesters = ["大一上", "大一下", "大二上", "大二下", "大三上", "大三下", "大四上", "大四下"];
        let title = ["", "課程名稱", "學分數", "年級", "類別", "課程時間", "課程代碼", "教師", "學期"]
        let title1 = ["", "課程名稱", "學分數", "年級", "類別", "課程時間", "課程代碼", "教師", "子領域", "學期"]
        let title2 = ["", "課程名稱", "學分數", "類別", "課程時間", "課程代碼", "教師", "子領域", "學期"]
        let title3 = ["", "課程名稱", "學分數", "類別", "課程時間", "課程代碼", "教師", "學期"]
        let gen = ["微積分", "數位邏輯", "數位邏輯實驗", "線性代數", "演算法", "電腦網路", "普通物理", "計算機組織學", "機率論", "程式設計", "計算機概論", "資料結構", "作業系統", "離散數學", "程式設計(二)", "資訊專題討論", "英文(大一英文)", "國文（上）（國文領域）", "國文（下）（國文領域）", "海洋科學概論"]
        let gent = ["微積分", "數位邏輯", "數位邏輯實驗", "線性代數", "演算法", "電腦網路", "普通物理", "計算機組織學", "機率論", "程式設計", "計算機概論", "資料結構", "作業系統", "離散數學", "程式設計(二)", "資訊專題討論", "英文(大一英文)", "國文（上）（國文領域）", "國文（下）（國文領域）", "海洋科學概論"]
        let tablewidth = 1;
        let place = 1
        ////////////////////////////////////////////////學分彈出視窗/////////////////////////////////////////////////////////////////////////////////////////////
        $(function () {
            $("#required").click(function () {
                if (now)
                    $("#" + now).hide()
                $("#requiredcourse").fadeIn('slow')
                now = 'requiredcourse'
            });
            $("#optional").click(function () {
                if (now)
                    $("#" + now).hide()
                $("#optionalcourse").fadeIn('slow')
                now = 'optionalcourse'
            });
            $("#general").click(function () {
                if (now)
                    $("#" + now).hide()
                $("#generalcourse").fadeIn('slow')
                now = 'generalcourse'
            });
            $(".cross").click(function () {
                $(".popup").fadeOut('fast')
                now = ''
            })
        });
        ////////////////////////////////////////////////切換學年課表/////////////////////////////////////////////////////////////////////////////////////////////        
        $(function () {
            $('.arrow').click(function () {
                if (this.id == "left") {
                    $(".strip").animate({
                        scrollLeft: '-=' + $(".numWrap").width()
                    }, 400);
                    if (tablewidth >= 2) {
                        tablewidth -= 1;
                    }
                    place--;
                } else {
                    $(".strip").animate({
                        scrollLeft: '+=' + $(".numWrap").width()
                    }, 400);
                    if (tablewidth <= 7) {
                        tablewidth += 1;
                    }
                    place++;
                }
            })
        });

        $(function () {
            $(".btn-check").click(function () {
                let id = parseInt(this.id.split("SEM")[1]);
                let time = id - tablewidth;
                tablewidth = Math.abs(id);
                if (time < 0) {
                    $(".strip").animate({
                        scrollLeft: '-=' + $(".numWrap").width() * -1 * time
                    }, 400);
                    place = place - time
                }
                else {
                    $(".strip").animate({
                        scrollLeft: '+=' + $(".numWrap").width() * time
                    }, 400);
                    place = place + time
                }
            })
        });

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $(".club").hover(function () {
            $(this).fadeOut(100);
            $(this).fadeIn(500);
        });
        function start() {
            let aaa = document.getElementById("reqc");
            for (let i = 0; i < gen.length; i++) {
                let y = document.createElement("span");
                y.setAttribute("id", "cc" + i);
                y.innerHTML = "   " + gen[i] + "   "
                if ((i + 1) % 3 == 0)
                    y.innerHTML += "<br>"

                aaa.appendChild(y);
            }
            let x = document.getElementById("strip");
            for (let i = 0; i < 8; i++) {
                let y = document.createElement("table");
                y.setAttribute("class", "tableclass");
                x.appendChild(y);
                for (let j = 0; j < 15; j++) {
                    let z = document.createElement("tr");
                    z.setAttribute("class", "row" + (j % 2));
                    y.appendChild(z);
                    for (let k = 0; k < 8; k++) {
                        let a = document.createElement("td");
                        a.setAttribute("id", String(i) + String(j) + String(k));
                        a.setAttribute("class", "club");
                        a.setAttribute("name", "club");
                        z.appendChild(a);
                    };
                };
            };
            addtext();
            let elem = document.getElementsByClassName('club');
            for (let i = 0; i < elem.length; i++) {
                elem[i].addEventListener('mouseover', mouseover, false);
                elem[i].addEventListener('mouseout', mouseout, false);
            };
            jsn();
            let input = document.getElementById("myInput");
            input.addEventListener("keypress", function (event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    jsn(1);
                }
            });
        }
        /////////////////////////////////////////////課表內動畫////////////////////////////////////////////////////////////////////////////////////////////////
        function mouseover(e) {
            let x = e.target.getAttribute("column")
            let y = e.target.getAttribute("row")
            e.target.setAttribute("style", "background-color: #CFC3BC;");
        }
        function mouseout(e) {
            e.target.setAttribute("style", "background-color: '';");
        }
        //////////////////////////////////////////////課表生成///////////////////////////////////////////////////////////////////////////////////////////////
        function addtext() {
            for (let y = 0; y < 8; y++)
                for (let i = 1; i <= 7; i++) {
                    document.getElementById(String(y) + "0" + String(i)).innerHTML = week[i - 1];
                };
            for (let y = 0; y < 8; y++)
                for (let i = 1; i <= 14; i++) {
                    document.getElementById(String(y) + String(i) + "0").innerHTML = "第" + array[i - 1] + "節";
                };
            for (let y = 0; y < 8; y++)
                document.getElementById(String(y) + "00").innerHTML = semesters[y];
        }
        //////////////////////////////////////////////////////課表提交///////////////////////////////////////////////////////////////////////////////////////
        function submit(x) {
            x.setAttribute("disabled", "disabled")
            let sign = 0
            tr = x.id.split("j")
            let teacher
            let classcode
            let tablewidth

            let classname = document.getElementById("k" + tr[1] + "2").innerText
            let classtime = document.getElementById("k" + tr[1] + "6").innerText
            if (!classtime.includes(",")) {
                sign = 1
                classtime = document.getElementById("k" + tr[1] + "5").innerText
            }
            classtime = classtime.split(",")
            if (sign == 0) {
                teacher = document.getElementById("k" + tr[1] + "8").innerText
                classcode = document.getElementById("k" + tr[1] + "7").innerText
            }
            else {
                teacher = document.getElementById("k" + tr[1] + "7").innerText
                classcode = document.getElementById("k" + tr[1] + "6").innerText
            }
            let z = document.getElementById("sel").value
            if (z == "系內課程") {
                let pop = document.getElementById("k" + tr[1] + "5").innerText
                let y = document.getElementById("k" + tr[1] + "4").innerText
                if (y.includes("1"))
                    tablewidth = 1
                else if (y.includes("2"))
                    tablewidth = 3
                else if (y.includes("3"))
                    tablewidth = 5
                else if (y.includes("4"))
                    tablewidth = 7
                y = document.getElementById("k" + tr[1] + "0").innerText
                if (y == "下學期")
                    tablewidth++

                if (pop.includes("選修")) {
                    let n = document.getElementById("k" + tr[1] + "3").innerText
                    let k = document.getElementById("chtwo").innerText
                    document.getElementById("chtwo").innerHTML = parseInt(k) + parseInt(n)
                    let c = document.getElementById("selectedoptional").innerText
                    c = parseInt(c) + parseInt(n)
                    document.getElementById("selectedoptional").innerHTML = c
                }
                else {
                    for (let i = 0; i < gen.length; i++) {
                        if (gent[i] == classname) {
                            let r = document.getElementById("cc" + i)
                            r.setAttribute("style", "color:white")
                            break
                        }
                    }
                }
            }
            else if (z == "體育") {
                let c = document.getElementById("selectedPE").innerText
                c++
                document.getElementById("selectedPE").innerHTML = c
                tablewidth = place
            }
            else if (z == "語文課程") {
                tablewidth = place
                let pop = document.getElementById("k" + tr[1] + "4").innerText
                if (pop.includes("必修")) {
                    for (let i = 0; i < gen.length; i++) {
                        if (gent[i] == classname) {
                            let r = document.getElementById("cc" + i)
                            r.setAttribute("style", "color:white")
                            break
                        }
                    }
                } else {
                    let k = document.getElementById("chone").innerText
                    if (k == '8') {
                        alert("已超過八學分, 不納入有效學分")
                    } else {
                        j = document.getElementById("selectedoptional").innerText
                        document.getElementById("selectedoptional").innerHTML = parseInt(j) + 2
                        document.getElementById("chone").innerHTML = parseInt(k) + 2
                    }
                }
            }
            else if (z == "英文課程") {
                tablewidth = place
                let pop = document.getElementById("k" + tr[1] + "4").innerText
                if (pop.includes("必修")) {
                    for (let i = 0; i < gen.length; i++) {
                        if (gent[i] == classname) {
                            let r = document.getElementById("cc" + i)
                            r.setAttribute("style", "color:white")
                            break
                        }
                    }
                } else {
                    let k = document.getElementById("chone").innerText
                    if (k == '8') {
                        alert("已超過八學分, 不納入有效學分")
                    } else {
                        j = document.getElementById("selectedoptional").innerText
                        document.getElementById("selectedoptional").innerHTML = parseInt(j) + 2
                        document.getElementById("chone").innerHTML = parseInt(k) + 2
                    }
                }
            }
            else {
                tablewidth = place
                let pop = document.getElementById("k" + tr[1] + "5").innerText
                if (pop.includes("必修")) {
                    for (let i = 0; i < gen.length; i++) {
                        if (gent[i] == classname) {
                            let r = document.getElementById("cc" + i)
                            r.setAttribute("style", "color:white")
                            break
                        }
                    }
                } else {
                    let j
                    let y = document.getElementById("k" + tr[1] + "9").innerText
                    if (y.includes("人格")) {
                        j = document.getElementById("fieldone")
                    } else if (y.includes("民主")) {
                        j = document.getElementById("fieldtwo")
                    } else if (y.includes("全球")) {
                        j = document.getElementById("fieldthree")
                    } else if (y.includes("經典")) {
                        j = document.getElementById("fieldfour")
                    } else if (y.includes("美學")) {
                        j = document.getElementById("fieldfive")
                    } else if (y.includes("科技")) {
                        j = document.getElementById("fieldsix")
                    } else if (y.includes("自然")) {
                        j = document.getElementById("fieldseven")
                    } else if (y.includes("歷史")) {
                        j = document.getElementById("fieldeight")
                    }
                    let k = j.innerText
                    if (k == '4') {
                        alert("該領域已超過四學分, 不納入有效學分")
                    } else {
                        j.innerHTML = parseInt(k) + 2
                        document.getElementById("selectedgeneral").innerText = parseInt(k) + 2

                    }
                }
            }
            let timelength = classtime.length;
            for (let time = 0; time < timelength; time++) {
                let weeknum = parseInt(parseInt(classtime[time]) / 100);
                let classnum = parseInt(parseInt(classtime[time]) % 100);
                console.log(String(tablewidth - 1) + String(classnum) + String(weeknum))
                document.getElementById(String(tablewidth - 1) + String(classnum) + String(weeknum)).innerHTML = `<p>${classname}<br>${classcode}<br>${teacher}</p>`;
            }
        }

  //////////////////////////////////////////////提交按鈕填入課表///////////////////////////////////////////////////////////////////////////////////////////////
  let timelength = classtime.length;
            let Id;
            for (let time = 0; time < timelength; time++) {
                let weeknum = parseInt(parseInt(classtime[time]) / 100);
                let classnum = parseInt(parseInt(classtime[time]) % 100);
                console.log(String(tablewidth - 1) + String(classnum) + String(weeknum))
                document.getElementById(String(tablewidth - 1) + String(classnum) + String(weeknum)).innerHTML = `<p>${classname}<br>${classcode}<br>${teacher}</p>`;
                Id = String(tablewidth - 1) + String(classnum) + String(weeknum);
            }
  //////////////////////////////////////////////儲存到sheet///////////////////////////////////////////////////////////////////////////////////////////////
            let accName = "Auth::user()->name";
            $.ajax({
                url: "https://script.google.com/macros/s/AKfycbyVV8p0nA0owNei9-2lyoIkRchTFSd7F4uzu4x2_8q3PJ9GeOd0-dPBZYJyqbjOK3uewQ/exec",
                data: {
                    "name": accName,
                    "classid": Id,
                    "classname": classname,
                    "classcode": classcode,
                    "teacher": teacher,
                    "classtime": `${classtime[0]},${classtime[1]},${classtime[2]}`
                },
                success: function(response) {
                    if(response == "成功"){
                        console.log("submit success");
                    }
                },
            });
        }
  //////////////////////////////////////////////載入sheet///////////////////////////////////////////////////////////////////////////////////////////////
        $(document).ready(function () {
            const sheetID = "15r0AFxcQbOX5zyWDzfEhm9SDMrgemF_DUGoeY7F19YU"; // 試算表代號
            const gid = "0"; // 工作表代號
            let sql = encodeURI("select *"); // SQL 語法，目前是設定"F>300"才會撈出來
            let callback = "display"; // 回呼函數名稱
            let url = "https://spreadsheets.google.com/tq?tqx=responseHandler:" + callback + "&tq=" + sql + "&key=" + sheetID + "&gid=" + gid;
            //console.log(url);

            $.getScript(url); //取回Google Spreadsheet API回傳之JS code並執行

        });

        function display(resultJson) {

            console.log(resultJson); //印出回傳結果，可仔細觀察一下Google試算表回傳之JSON內容
            let rowArray = resultJson.table.rows;            
            let rowLength = rowArray.length;

            let htmlContent = "";

            for (let i = 0; i < rowLength; i++) {

                let dataGroup = rowArray[i].c;
                let dataLength = dataGroup.length;

                htmlContent += "<p>";

                for (let j = 2; j < 5; j++) {
                    if (!dataGroup[j]) {
                        htmlContent += "<br>";
                        continue; //預防空的field
                    }
                    htmlContent += (dataGroup[j].f || dataGroup[j].v || " ") + "<br>"; //有f印f (field)，沒f印v (value)，不然印空字串
                }//<p>${classname}<br>${classcode}<br>${teacher}</p> 上面的code跑迴圈的過程
                htmlContent += "</p>";
            }
            document.getElementById((dataGroup[1].f || dataGroup[1].v || " ")).innerHTML = htmlContent; //id內套用內容
        };

        //////////////////////////////////////////////課表清空///////////////////////////////////////////////////////////////////////////////////////////////
        $(function () {
            $("#clear").click(function () {
                for (let z = 0; z < 8; z++) {
                    for (let y = 1; y <= 7; y++) {
                        for (let i = 1; i <= 14; i++) {
                            document.getElementById(String(z) + String(i) + String(y)).innerHTML = "";
                        }
                    };
                }
                document.getElementById("selectedgeneral").innerText = 0
                document.getElementById("selectedoptional").innerHTML = 0
                document.getElementById("selectedPE").innerHTML = 0
                let aaa = document.getElementById("reqc");
                aaa.innerHTML = ""
                start()
            })
        });
        //////////////////////////////////////////////課表清單///////////////////////////////////////////////////////////////////////////////////////////////
        function jsn(key) {
            let countx = 1;
            let county = 0;
            let type = document.getElementById("sel").value;
            let hid = document.getElementById("year");
            let hid1 = document.getElementById("typech");
            let tmp = 'CSE'
            if (type.includes("系內")) {
                tmp = 'CSE'
                hid.setAttribute("style", "display: inline-box")
                hid1.setAttribute("style", "display: inline-box;")
            }
            else {
                hid.setAttribute("style", "display: none;")
                hid1.setAttribute("style", "display: none;")
                if (type.includes("英文"))
                    tmp = 'Eng'
                else if (type.includes("語文"))
                    tmp = 'lang'
                else if (type.includes("博雅"))
                    tmp = 'general'
                else if (type.includes("體育"))
                    tmp = 'PE'
            }

            let rep = document.getElementById("tablebody");
            rep.remove();
            let t = document.getElementById("classtable");
            let x = document.createElement("tbody");
            t.appendChild(x);
            x.setAttribute("id", "tablebody")
            let y = document.createElement("tr");
            x.appendChild(y);
            let z
            if (tmp == 'general') {
                for (let i = 0; i < 10; i++) {
                    z = document.createElement("td");
                    z.setAttribute("class", "table table-success table-striped");
                    z.innerText = title1[i]
                    y.appendChild(z);
                }
            } else if (tmp == 'CSE') {
                for (let i = 0; i < 9; i++) {
                    z = document.createElement("td");
                    z.setAttribute("class", "table table-success table-striped");
                    z.innerText = title[i]
                    y.appendChild(z);
                }
            }
            else if (tmp == 'lang') {
                for (let i = 0; i < 9; i++) {
                    z = document.createElement("td");
                    z.setAttribute("class", "table table-success table-striped");
                    z.innerText = title2[i]
                    y.appendChild(z);
                }
            }
            else {
                for (let i = 0; i < 8; i++) {
                    z = document.createElement("td");
                    z.setAttribute("class", "table table-success table-striped");
                    z.innerText = title3[i]
                    y.appendChild(z);
                }
            }

            $.getJSON("https://lemonade-00.github.io/test/" + tmp + ".json", function (result) {
                $.each(result, function (i, field) {
                    $.each(field, function (j, data) {
                        z = document.createElement("td");
                        if (j == '_id') {
                            countx += 1;
                            y = document.createElement("tr");
                            y.setAttribute("id", "j" + String(countx));
                            x.appendChild(y);
                            let a = document.createElement("input");
                            a.setAttribute("class", "butt")
                            a.setAttribute("type", "button");
                            a.setAttribute("value", '提交');
                            a.setAttribute("id", "j" + String(countx))
                            a.setAttribute("onclick", "submit(this)");
                            z.appendChild(a);
                        }
                        else
                            z.innerText = data
                        county += 1;
                        z.setAttribute("class", "table table-success table-striped");
                        if (tmp == 'general')
                            z.setAttribute("id", "k" + String(countx) + String(county % 10));
                        else if (tmp == 'CSE' || tmp == 'lang')
                            z.setAttribute("id", "k" + String(countx) + String(county % 9));
                        else
                            z.setAttribute("id", "k" + String(countx) + String(county % 8));
                        y.appendChild(z);
                    });
                });
                if (tmp == 'CSE')
                    if (tmp == 'CSE')
                        filter(countx);
                if (key == 1)
                    filtercourse();
            });
        }
        function filter(countx) {
            let year = document.getElementById("year").value;
            let type = document.getElementById("typech").value;
            if (year == '全部')
                year = ''
            if (type == '全部')
                type = ''
            for (let i = 2; i <= countx; i++) {
                let tmp = document.getElementById("k" + String(i) + "4").innerText;
                let tmp1 = document.getElementById("k" + String(i) + "5").innerText;
                if (tmp.includes(year) && tmp1.includes(type))
                    continue;
                let del = document.getElementById("j" + String(i));
                del.remove()
            }
        }
        function filtercourse() {
            let input = document.getElementById("myInput");
            let key
            if (!input.value)
                key = "";
            else
                key = input.value
            i = 2;
            while (document.getElementById("j" + String(i))) {
                let tmp = document.getElementById("k" + String(i) + "2").innerText;
                if (!tmp.includes(key))
                    document.getElementById("j" + String(i)).remove()
                i++;
            }
        }
        window.addEventListener("load", start, false);
    </script>

<body>
    @yield('content')
</body>
</html>
