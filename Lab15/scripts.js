function task7() {
    alert("Простое сообщение");
    result = confirm("Проверка кнопки");
    if (result === true) {
        document.write("Вы нажали Ок");
    }
    else {
        document.write("Вы нажали Отмена");
    }
}

function task8() {
    alert("Нравится ли вам картинка?");
}

function task9() {
    let username = prompt('Введите имя пользователя', );
    // alert(`Тебе ${username} лет!`);
    // alert("Добрый день, " + username);
    document.write("Добрый день, <span style=color:green>" + username + "</span>");
}

function task10() {
    let fname = prompt('Введите имя', );
    let lname = prompt('Введите фамилию', );
    let gname = prompt('Введите отчество', );
    var site = location.hostname;
    upFname = fname.substring(0, 1);
    upFname.toUpperCase();
    upGname = gname.substring(0, 1);
    upGname.toUpperCase();
    upLname = lname.toUpperCase();
    // alert(`Тебе ${username} лет!`);
    document.write("Добрий день, " + upLname + " " + upFname + ". " + upGname + ". Ми раді привітати вас на сайті " + site);
}

function task11() {
    let fname = prompt('Введите имя', );
    let lname = prompt('Введите фамилию', );
    let gname = prompt('Введите отчество', );
    var site = location.hostname;
    upFname = fname.substring(0, 1);
    upFname.toUpperCase();
    upGname = gname.substring(0, 1);
    upGname.toUpperCase();
    upLname = lname.toUpperCase();
    // alert(`Тебе ${username} лет!`);
    document.write("Добрий день, " + upLname + " " + upFname + ". " + upGname + ". Ми раді привітати вас на сайті " + site + "<br> <a href=task12.html> LINK </a>");
}

function task12() {
    //document.write("history");
    history.go(-1);
}

function task13() {
    var date1 = new Date();
    alert("Текущая дата: " + date1);
    var date2 = new Date(1999, 11, 11);
    alert("Специальная дата: " + date2);
}

function task14() {
    var date1 = new Date();
    alert(date1.toDateString());
    var date2 = new Date(1981, 09, 30);
    alert(date2.toDateString());
    var year = prompt('YEAR = ', );
    var month = prompt('MONTH = ', );
    var day = prompt('DAY = ', );
    var date4 = new Date(year, month - 1, day);
    document.write("Введення дата: " + date4.toDateString() + "<br>");
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var n = weekday[date4.getDay()];
    document.write("День недели: " + n);
}

function task15() {
    var date1 = new Date();
    var date2 = new Date(date1.getFullYear(), date1.getMonth(), date1.getDate() + 7);
    document.write("<b>Текущая дата: </b> " + date1.toDateString() + "<br> <b>Следующая неделя:</b> " + date2.toDateString());
}

function task16() {
    let var1 = prompt('Первое число', );
    let var2 = prompt('Второе число', );
    var x = parseInt(var1);
    var y = parseInt(var2);
    var res = x + y;
    document.write(x + " + " + y + " = " + res);
}

function task17() {
    let var1 = prompt('Начальное значение Х = ', );
    var x = parseInt(var1);
    let var2 = prompt('Количество итераций = ', );
    var x = parseInt(var1);
    var max = parseInt(var2);
    var y1 = x * x;
    var y2 = Math.sin(x);
    document.write("Начальное значение x = <b> " + x + " </b> <br> Количество итераций = <b>" + max + "</b>");
    document.write("<table border=1px style = 'border-collapse: collapse; text-align:center;font-size:20px;'> <tr> <td> # </td><td> <b> y = x*x  </td> <td>  y = sin(x) </b> </td> </td>");
    for (i = 1; i <= max; i++, x++) {
        var y1 = x * x;
        var y2 = Math.sin(x);
        document.write("<tr> <td> " + i + " </td>  <td>" + y1 + "</td> <td> " + y2.toPrecision(5) + " </td> </td>");
    }
    document.write("</table>");
}
