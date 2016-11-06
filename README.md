# Automation of RTI Management System
### AIM
RTI management in goverment institutions is pen and paper based. Due to this it creates lot of issues like mismanagement, diffulty in analysis & report generateion, redundancy, storage problems, etc. This project focuses on automating this RTI system in government institutions to get rid of most of the problems caused by pen and paper based system.

###Languages required
Front-end : HTML, CSS, JS <br />
Back-end: PHP, Databases from php

###Setup
You need to install xampp on your system to setup this project.(Refer to online guides for installing xampp for your Operating System) <br />
Go to htdocs folder of your system. For linux it is /opt/lampp/htdocs/ <br />
Open terminal in your htdocs folder and clone the repository <br/>
Don't forget to import database present in extras folder and configure database file db/config_database.php with your system specific credentials <br/>
#### git clone https://github.com/codeb1ooded/BMSU.git
<br/>
### Working demo:
#### http://rti_igdtuw.site88.net/index.php
#### Portal to login will appear. There are three different use cases. Username and passwords to the same are mentioned below.
<ol> 
<li>Admin privilege
<table>
<tr>
<th> Username </th>
<th> Password </th>
</tr>
<tr>
<td> Administrator </td>
<td> admin </td>
</tr>
</table>
</li>

<li>
Department Privilege
<table>
<tr>
<th> Username </th>
<th> Password </th>
</tr>
<tr>
<td> Examination </td>
<td> exam </td>
</tr>
<tr>
<td> Human Resource </td>
<td> HR </td>
</tr>
<tr>
<td> Academics </td>
<td> Ac </td>
</tr>
</table>
</li>

<li>
Appellant access
<table>
<tr>
<th> Username </th>
<th> Password </th>
</tr>
<tr>
<td> Appellant </td>
<td> ap </td>
</tr>
</table>
</li>

</ol>

#### Other Salient Features
<ul>
<li> Backup </li>
<li> Security 
<ul>
<li> Password Encryption using SHA Keys </li>
<li> Sessional Security </li>
</ul> </li>
<li> Report Generation 
<ul>
<li> By name </li>
<li> By department </li>
<li> By time period </li>
</ul> </li> </ul>
