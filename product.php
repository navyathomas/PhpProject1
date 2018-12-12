<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./Styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="mypink">
        
    </body>
    <table class="table">
        <tr>
            <td>product name</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>product category</td>
                    <td><select>
                            <option value="electronics">electronics</option>
                            <option value="home appliances">home appliances</option>
                            <option value="mobile phone">mobile phone</option>
                            <option value="clothes">clothes</option>
                </select></td>
            
        </tr>
        <tr>
            <td>price</td>
            <td><input type="number"/></td>
        </tr>
        <tr>
            <td>stock</td>
            <td><input type="number"/></td>
        </tr>
        <tr>
            <td>availability</td>
            <td><input type="radio" value="available"/>available</td>
            <td><input type="radio" value="not available"/>not available</td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="submit"/></td>
        </tr>
        
    </table>
</html>
