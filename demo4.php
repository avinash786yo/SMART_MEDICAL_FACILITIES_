 <html>
    <head><title> Employee Data</title></head>
  <body bgcolor="pink">
  <form method="POST" action="empprins.php">
   <h3> <p align="center"> Employee Personal Detail </h3>   </p>
      <table <p align="center">
   <tr> <th>Employee Code :</th><td> <input type="text" name="ecode" size="20"/></td></tr>
  <tr><th>Employee Name: </th><td><input type="text" name="ename" size="20"/>       </td></tr>
 <tr><th> Employee Education:</th><td> <input type="text"  name="eedu" size="20">   </td></tr>
 <tr><th> Gender:</th><td> Male<input type="radio" name="egender" value="Male"></td>
 <td> Female<input type="radio" name="egender" value="female"></td></tr>
  <tr> <th>DOB <td>
  <select size="1" name="edob" value="Year">
   <option>Year</option>
   <option>1980</option>
   <option>1981</option>
   <option>1982</option>
   <option>1982</option>
   <option>1983</option>
   <option>1984</option>
   <option>1985</option>
   <option>1986</option>
   <option>1987</option>
   <option>1988</option>
   <option>1989</option>
   <option>1990</option>
   <option>1991</option>
   <option>1992</option>
   <option>1993</option>
   <option>1994</option>
   <option>1995</option>
   <option>1996</option>
   <option>1997</option>
   <option>1998</option>
   <option>1999</option>
   <option>2000</option>
   <option>2001</option>
   <option>2002</option>
   <option>2003</option>
   <option>2004</option>
   <option>2005</option>
   <option>2006</option>
   <option>2007</option>
   <option>2008</option>
   <option>2009</option>
   <option>2010</option>
</select>
  <select size="1" name="edob" value="month">  </th>
  <option>month</option>
   <option>jan</option>
   <option>feb</option>
   <option>mar</option>
   <option>apr</option>
   <option>may</option>
   <option>june</option>
   <option>july</option>
   <option>Aug</option>
   <option>Sep</option>
   <option>Oct</option>
   <option>Nov</option>
   <option>Dec</option>
</select>
<select size="1" name="edob" value="date">
   <option>date</option>
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   <option>13</option>
   <option>14</option>
   <option>15</option>
   <option>16</option>
   <option>17</option>
   <option>18</option>
   <option>19</option>
   <option>20</option>
   <option>21</option>
   <option>22</option>
   <option>23</option>
   <option>24</option>
   <option>25</option>
   <option>26</option>
   <option>27</option>
   <option>28</option>
   <option>29</option>
   <option>30</option>
   <option>31</option>
</select> </td></tr>
<tr><th>Father/Husband Name:</th><td><input type="text" name="ef_hname" size="20"></td></tr>
<tr><th>Father/Husband Occu:</th><td><input type="text"  name="ef_hoccu" size="20"></td></tr>
<tr><th> Address1:</th><td><textarea rows="2" cols="20" name="eadd1"> </textarea></td></tr>
<tr><th> Adreess2:</th><td><textarea rows="2"  cols="20" name="eadd2" ></textarea></td></tr>
<tr><th> City </th><td><select size="1" name="ecity" value=""> <BR>
   <option>none</option>
   <option>Ludhiana</option>
   <option>Chandigarh</option>
   <option>Jalandhar</option>
   <option>Mohali</option>
   <option>Moga</option>
   <option>Ferozpur</option>
   <option>Faridkot</option>
   <option>Samrala</option>
   <option>Ambala</option>
</select></td></tr>
<tr><th> State:</th><td><select size="1" name="esta" value="">
   <option>none</option>
   <option>Punjab</option>
</select></td></tr> <BR>
<tr><th>Pin No:</th> <td> <input type="text" name="epin" size="20">   </td></tr>
<tr><th>Contact No:</th> <td> <input type="text"  name="etel" size="20">   </td></tr>
 </p> </table>
  <input type="submit" value="SAVE">
 </form>
 </body>
 
 
 </html>
 