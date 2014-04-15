/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        /*    $(function() {
                var availableTags = [
                    "PlayStation 4",
					"PS4",
					"Sony",
                    "Xbox One",
                    "Microsoft",
                    "Wii U",
                    "Wii",
					"Nintendo"    
                ];
                
                
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
  

*/

var source = [ { value: "src/devices/consoles/ps4.php",
                 label:"PlayStation 4"
               },
               { value: "src/devices/consoles/ps4.php",
                 label:"PS4"
               },
               { value: "src/devices/consoles/ps4.php",
                 label:"Sony"
               },
                { value: "src/devices/consoles/xbox.php",
                 label:"Xbox One"
               },
               { value: "src/devices/consoles/xbox.php",
                 label:"Microsoft"
               },
                { value: "src/devices/consoles/wiu.php",
                 label:"Nintendo"
              },
              { value: "src/devices/consoles/wiu.php",
                 label:"Wii U"
               }
               
             ];

    $("input#tags").autocomplete({
        source: source,
        select: function( event, ui ) { 
            window.location.href = ui.item.value;
        }
    });


