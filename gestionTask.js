// let tasks = [
//     {
//     id:1,
//     task:"read a book ",
//     status:"en cours"
//   }
// ];

// console.log(tasks);

let myArray = ["eat","tea","tan","ate","nat","bat"];

for(let i=0;i<myArray.length;i++){
    for(let j=1;j<myArray.length;j++){
        for(let c=0;c<myArray[i].length ;c++){
            let  isExiste= [] ;
            for(let k=0;k<myArray[i];k++){
                if(myArray[i][c]==myArray[j][k]){
                    isExiste.push(true);
                    break;
                }
            }

        }
    }
}





INSERT INTO `Product_images` (`id`, `product_id`, `image_path`, `is_primary`) VALUES
(1, 179, 'modern_sofa_gray_main.jpg', 1),
(2, 179, 'modern_sofa_gray_angle.', 0),
(3, 179, 'modern_sofa_charcoal_main.jpg', 0),
(5, 180, 'accent_chair_green_main.jpg', 1),
(6, 180, 'accent_chair_rose_main.jpg', 0),
(7, 180, 'accent_chair_yellow_main.jpg', 0),
(8, 181, 'coffee_table_walnut_main.jpg', 1),
(9, 181, 'coffee_table_black_main.jpg', 0),
(10, 181, 'coffee_table_marble_main.jpg', 0),
(11, 182, 'tv_stand_oak_main.jpg', 1),
(12, 182, 'tv_stand_walnut_main.jpg', 0),
(13, 182, 'tv_stand_white_main.jpg', 0),
(16, 184, 'bed_frame_oak_main.jpg', 1),
(17, 184, 'bed_frame_walnut_main.jpg', 0),
(18, 184, 'bed_frame_white_main.jpg', 0),
(19, 185, 'bedside_white_main.jpg', 1),
(20, 185, 'bedside_black_main.jpg', 0),
(21, 185, 'bedside_wood_main.jpg', 0),
(22, 186, 'duvet_white_main.jpg', 1),
(23, 186, 'duvet_sage_main.jpg', 0),
(24, 186, 'duvet_terracotta_main.jpg', 0),
(25, 186, 'duvet_navy_main.jpg', 0),
(26, 187, 'kitchen_organizer_white_main.jpg', 1),
(27, 187, 'kitchen_organizer_black_main.jpg', 0),
(28, 188, 'cookware_copper_main.jpg', 1),
(29, 188, 'cookware_copper_detail.jpg', 0),
(30, 189, 'cutting_board_main.jpg', 1),
(31, 189, 'cutting_board_detail.jpg', 0),
(32, 190, 'dinnerware_white_main.jpg', 1),
(33, 190, 'dinnerware_black_main.jpg', 0),
(34, 190, 'dinnerware_speckled_main.jpg', 0),
(35, 191, 'shower_head_chrome_main.jpg', 1),
(36, 191, 'shower_head_black_main.jpg', 0),
(37, 192, 'bathtub_white_main.jpg', 1),
(38, 192, 'bathtub_black_main.jpg', 0),
(39, 193, 'vanity_white_main.jpg', 1),
(40, 193, 'vanity_gray_main.jpg', 0),
(41, 193, 'vanity_black_main.jpg', 0),
(42, 194, 'towels_white_main.jpg', 1),
(43, 194, 'towels_gray_main.jpg', 0),
(44, 194, 'towels_beige_main.jpg', 0),
(45, 195, 'patio_brown_main.jpg', 1),
(46, 195, 'patio_gray_main.jpg', 0),
(47, 196, 'garden_lights_main.jpg', 1),
(48, 196, 'garden_lights_night.jpg', 0),
(49, 197, 'planters_white_main.jpg', 1),
(50, 197, 'planters_black_main.jpg', 0),
(51, 197, 'planters_terracotta_main.jpg', 0),
(52, 198, 'fire_pit_black_main.jpg', 1),
(53, 198, 'fire_pit_copper_main.jpg', 0),
(54, 199, 'pendant_light_brass_main.jpg', 1),
(55, 199, 'pendant_light_black_main.jpg', 0),
(56, 199, 'pendant_light_white_main.jpg', 0),
(57, 200, 'floor_lamp_black_main.jpg', 1),
(58, 200, 'floor_lamp_white_main.jpg', 0),
(59, 200, 'floor_lamp_nickel_main.jpg', 0),
(60, 201, 'smart_bulbs_main.jpg', 1),
(61, 201, 'smart_bulbs_colors.jpg', 0),
(62, 202, 'desk_lamp_black_main.jpg', 1),
(63, 202, 'desk_lamp_white_main.jpg', 0),
(64, 202, 'desk_lamp_brass_main.jpg', 0),
(176, 179, 'IMG_20250408_134428 (1).jpg', 1),
(177, 233, 'Capture d’écran 2025-04-17 160506.png', 1),
(178, 233, 'Capture d’écran 2025-04-17 160007.png', 0),
(179, 234, 'Capture d’écran 2025-04-17 160506.png', 1),
(180, 234, 'Capture d’écran 2025-04-17 160007.png', 0),
(181, 235, 'Capture d’écran 2025-04-17 160506.png', 1),
(182, 235, 'Capture d’écran 2025-04-17 160007.png', 0),
(183, 236, 'mirror2.webp', 1),
(184, 236, 'mirror.webp', 0),
(185, 236, 'Capture d’écran 2025-04-22 103841.png', 0),
(186, 236, '7O2A2322.JPG', 0),
(187, 236, 'Capture d’écran 2025-04-17 160007.png', 0),
(189, 239, 'istockphoto-1490325659-612x612.jpg', 1),
(190, 240, '', 1),
(191, 241, '', 1),
(192, 242, '', 1),
(193, 243, '', 1),
(194, 244, '', 1),
(195, 245, '', 1),
(197, 239, 'téléchargement (1).jpg', 0);