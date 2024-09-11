
<html>
    <head>
        <style>
            body{
                background-color:#293132;
            }
            /* #293132 */
            table{
               
                /* background-color:#C7FFD8; */
                background: transparent;
                border: 5px solid #333;
               justify-content: center;
               margin-top: 200px;
               border: 3px solid black;
               height: 340px;
               width: 50%;
               text-align: center;
               border-radius: 20px;
               font-size: 20px;
               color: cyan;
            }
            table:hover{
                border: 5px solid #0ef;
                box-shadow: 0 0 20px #0ef, inset 0 0 20px #0ef ;
            }
            .btn{
                box-shadow: 0 0 5px cyan, 0 0 25px cyan;
            }
            .btn:hover{
                box-shadow: 0 0 5px cyan,0 0 25px cyan,0 0 50px cyan,0 0 100px cyan,0 0 200px cyan;
            }
        </style>
    </head>
<form action="dashbord1.php" method="get" enctype="multipart/form-data">
<center>
        <table border="3px" >
<tr>
    <td colspan="2" align-item="center"><h3>Student  Deshbord  Details</h3> </td>
</tr>
        <tr>

            <td >Add  Title</td>
            <td><input type="text" class="btn" style="border-radius:10px;font-size:15px; text-align:center; border-radius:10px; height: 30px; width: 250px;" placeholder="Add title " required name="title"></td>
                                    <!-- This Is Dilnavaz DashBord -->

            
        <!-- <img src="2021-25-3-12-54-40_logo.png" alt="" height="20px" width="20px"> -->
        <tr>
            <td >My Self</td>
            <td><input type="text" class="btn" style="border-radius:10px; font-size:15px; text-align:center; border-radius:10px; height: 30px; width: 250px;" placeholder="Add about your Self" required name="myself"/></td>
            <!-- Hello  My Name Is Dilnavaz Sida And I am MCA Student -->

        </tr>

        <tr>
            <td >My Skillset</td>
            <td><input type="text" class="btn"style="border-radius:10px; font-size:15px; text-align:center; border-radius:10px; height: 30px; width: 250px;" placeholder="Add Your skills" required name="skill"></td>
                        <!-- Html  CSS  JAVASCRIPT  PHP And I Have Also Good Communication Skill -->
        </tr>

        <tr>
            <td >My Project Details</td>
            <td><input type="text"class="btn" style="border-radius:10px; font-size:15px; text-align:center; border-radius:10px;height: 30px; width: 250px;"  placeholder="Add Your Project Details" required name="pro-details"></td>
            <!-- IN BECHLOR I HAVE DONE  E-COMMARCE PROJECT  LIKE  ONLINE SHOPPING CENTER -->
        </tr>

      
        <tr><td colspan="2" ><center><input type="submit" class="btn" style="font-size:20px; text-align:center; border-radius:10px; " value="Add Data in DashBord" ></center></td></tr>
        </table></center>
        </form>
</html>

