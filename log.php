<html>
<head>
    <meta charset="utf-8">
    <title>
        Сайт web-студії "Web-DECO"
    </title> 
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
        function send()
        {
            var valid=true;
            var elems=document.forms[0].elements;
            for(var i=0;i<document.forms[0].length;i++)
            {
                if(elems[i].getAttribute('type')=='text'||elems[i].getAttribute('type')=='password'||elems[i].getAttribute('type')=='email')
                {
                    if (elems[i].value=='')
                    {
                        elems[i].style.border='2px solid red';
                        valid=false;
                    }
                }
            }
            if(!valid)
            {
                alert('Заповніть всі поля !!!');
                return false;
            }
        }
    </script>
    
    <style>
        .shadowtext
        {
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
     <script>
        window.onload=function()
        {
            setInterval(clockPainting, 1000);
        }      
    </script>
</head>
<body background="images/bg.jpg">
    <table border="1" aling="center" callpadding="10">
<tr>
    <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
        <font size="5" color="Maroon" ><h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1></font>
    </td>
    </tr>
    <tr>
        <td colspan="2">
            <font size="4"><d>
                <a href="#">Головна</a>&nbsp;&nbsp;
                <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                <a href="#">Телефони</a>&nbsp;&nbsp;
                <a href="#">Статистика</a>&nbsp;&nbsp;
                <a href="#">Зареєстровані</a>&nbsp;&nbsp;
            </d></font>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
            <center><canvas id="canvas" height="140" width="140"></canvas></center>
            <hr>
            <font size="5" color="navy"><h2>Новини</h2></font>
            <font size="5">
                <ul>
                    <li><a href="#">Сайт будівельної компанії</a></li>
                    <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS для Metro cash&Carry</a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
            </font>
            <hr>
            <H1 align="center"><font color="green">Реєстрація</font></H1>
            <form action="forma.php" method="post" onsubmit="return send() ;">
            <table align="center" bgcolor="#ccc">
                <tr>
                    <TD><font color="green">Прізвище</font>: </TD>
                    <td> <input type="text" size="10" maxlenght="20" name="name2"> </td>
                </tr>
               
                 <tr>
                     <TD><font color="green">Ім'я</font>: </TD>
                     <td> <input type="text" size="10" maxlenght="20" name="name1"> </td>
                 </tr>
                <tr>
                    <TD><font color="green">E-Mail</font>: </TD>
                    <td> <input type="email" size="10" maxlenght="20" name="email"> </td>
                </tr>
               <tr>
                 <TD><font color="green">Пароль</font>: </TD>
                 <td> <input type="password" size="10" maxlenght="20" name="password"> </td>
                 </tr>
            </table>
            <p align="center">
                <input type="submit" value="Зареєструватись">
                <input type="reset" value="Очистити">
                </p>
            
            </form>
             <hr>
        </td>
        <td width="70%">
            <?php
            echo '<h1 align="center">Хто до на сайт заходив !</h1>';
            echo '<table align="center" border="1" width="800">';
            echo '<tr>';
            
            echo '<td align ="center">IP Adress</td>';
            echo '<td align ="center">Браузер</td>';
            echo '<td align ="center">Дата</td>';
            echo '</tr>';

            $data = file("log.txt");
            foreach($data as $line)
            {
                $trs = explode("|",$line);

                echo '<tr>';
                echo '<td>'.$trs[0].'</td>';
                echo '<td>'.$trs[1].'</td>';
                echo '<td>'.$trs[2].'</td>';
                echo '</tr>';
            }
            echo '</tr>';
            ?>
        </td>
    </tr>
    <tr>
        <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробив "Турович О"</font>
        </td>
    </tr>
</table>
</body>

</html>