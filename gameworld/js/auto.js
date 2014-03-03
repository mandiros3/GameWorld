/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


            $(function() {
                var availableTags = [
                    "MAME",
                    "NES",
                    "NeoGeo",
                    "NeogeoPocket",
                    "PlayStation (1st gen.)",
                    "PlayStation 2",
                    "PlayStation 3",
                    "PlayStation 4",
					"PS4",
                    "SNES",
                    "Xbox One",
                    "Xbox 360",
                    "Xbox (1st gen.)",
                    "Wii U",
                    "Wii",
					"Nintendo",
                    
                ];
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
  
