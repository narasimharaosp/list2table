Title:- Convert list to table<br>
Purpose:- Easing the wiki content import during rapid website development.<br>
Description:- This code helps you convert the string(with tab space and newline) to HTML table.<br>
<br>
Example:-<br>
--------------------------------------<br>
<br>
Rule:-
--------------------------------------
th1 content - tab space - th2 content - new line(first row thead)<br>
td1 content - tab space - td2 content - new line(second row onwards tbody)
<br><br>
Input:-<br>
--------------------------------------<br>
Topic	Description<br>
Name	Vishnuvardhan(Saahasa Simha)<br>
Born	Sampath Kumar 18 September 1950 Mysore, Mysore State, India<br>
Died	30 December 2009 (aged 59) Mysore, Karnataka, India<br>
Nationality	Indian<br>
Occupation	Actor<br>
Years active	1972–2009<br>
Spouse(s)	Bharathi Rao (1975–2009)<br>
<br>
Output:-<br>
---------------------------------------<br>
<table  class='table'>
   <thead>
      <tr>
         <th>Topic</th>
         <th>Description</th>
   <thead>
      <tr>
   <tbody>
      <tr>
         <td>Born</td>
         <td>Sampath Kumar 18 September 1950 Mysore, Mysore State, India</td>
      </tr>
      <tr>
         <td>Died</td>
         <td>30 December 2009 (aged 59) Mysore, Karnataka, India</td>
      </tr>
      <tr>
         <td>Nationality</td>
         <td>Indian</td>
      </tr>
      <tr>
         <td>Occupation</td>
         <td>Actor</td>
      </tr>
      <tr>
         <td>Years active</td>
         <td>1972–2009</td>
      </tr>
      <tr>
         <td>Spouse(s)</td>
         <td>Bharathi Rao (1975–2009)</td>
      </tr>
   </tbody>
</table>

Thanks<br>
Happy coding!!!!!!<br>
@narasimharaosp