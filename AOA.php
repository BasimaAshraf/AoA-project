<!DOCTYPE html>
<html>

<head>
    <title>JS Bin</title>
    <style>
        body {
            padding-top: 50px;
            background-image: url('shopp.jpeg');
            background-position: center;
            background-size: cover;

        }
    .box{

          text-align: center;
            background-color: #b4b4b4;
            margin-left: 40%;
            margin-right: 40%;
            height:400px;
            
           }
           .box .inputbox
           {
              position: relative;
           }
          .box .inputbox input
           {
            width:100px;
            font-size: 16px; 
            color:;
            padding:10px;
            
            outline:none;
            background: transparent;
            border: none;
            border-bottom: 1px solid #fff;
           }
           .box .inputbox label
           {
            top:0px;
            bottom:0px;
            font-size: 16px; 
            color:;
            padding:10px;
            pointer-events:none 


           }


</style>
           


    </style>
</head>

<body>

    <script>
        var x = 0;
        var my_array = new Array(100);                  //  defining length here for now take 100;
        for (var i = 0; i < my_array.length; i++) {
            my_array[i] = new Array();
        }

        function add_element_to_array() {
            var y = 0;
            my_array[x][y] = document.getElementById("text1").value;
            y++;
            my_array[x][y] = document.getElementById("text2").value;
            y++;
            my_array[x][y] = document.getElementById("text3").value;
            alert("Element: " + my_array[x][y] + " Added at index " + x);
            x++;
            document.getElementById("text1").value = "";
            document.getElementById("text2").value = "";
            document.getElementById("text3").value = "";
        }

        function display_array() {
            var e = "<hr/>";

            for (var y = 0; y < my_array.length; y++) {
                if (my_array[y] != '')
                    e += "Element " + y + " = " + my_array[y] + "<br/>";
            }
            document.getElementById("Result").innerHTML = e;
        }


        var partition = function (my_array, low, high) {
            var k = my_array[high];
            var i = low - 1;
            for (j = low; j < high; j++) {
                if (my_array[j] <= k) {
                    i++;
                    //swapping
                    tmp = my_array[i];
                    my_array[i] = my_array[j];
                    my_array[j] = tmp;
                }
            }
            //swapping
            tmp = my_array[i + 1];
            my_array[i + 1] = my_array[high];
            my_array[high] = tmp;

            return i + 1;
        }
        var quickSort = function (my_array, low, high) {
            if (low < high) {
                index = partition(my_array, low, high);
                quickSort(my_array, low, index - 1);
                quickSort(my_array, index + 1, high);
            }
        }

    </script>
     <form class="box">
        <div class="inputbox">
        <h1>Prioritizing Shopping list</h1>
     <label>Priority</label>
     <br>
    <input type="text" id="text1" placeholder="Enter priority"></input>
    <br>
    <br>
    <label>Name of items</label><br>
    <input type="text" id="text2" placeholder="Enter Name"></input>
    <br>
    <br>
    <label>N0.of items</label><br>
    
    <input type="text" id="text3" placeholder="Enter Number"></input>
    <br>
    <br>
    <br>

</div>

    <input type="button" id="button1" value="Add" onclick="add_element_to_array();"></input>
  
    <input type="button" id="button2" value="display"  onclick="display_array();"></input>
    <br>

    <input type="button" id="button3"  value="Sort" onclick="quickSort(my_array, 0, 99);"></input>

    <input type="button" id="button4"  value="Display Sorted Array" onclick="display_array();"></input>

</form>
    <div id="Result">
     
    </div>

</body>

</html>