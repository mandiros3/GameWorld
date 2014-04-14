/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


            $(function() {
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
  

