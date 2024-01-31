<?php

if(isset($_POST['search_buy'])){

    $search_data="";
    if(isset($_POST['search_data'])){
        $search_data=trim($_POST['search_data']);
    }
    $property_type_residential="";
    if(isset($_POST['property_type_residential'])){
        $property_type_residential=trim($_POST['property_type_residential']);
    }
    $property_type_commercial="";
    if(isset($_POST['property_type_commercial'])){
        $property_type_commercial=trim($_POST['property_type_commercial']);
    }
    $property_type_agricultural="";
    if(isset($_POST['property_type_agricultural'])){
        $property_type_agricultural=trim($_POST['property_type_agricultural']);
    }
    $property_type_industrial="";
    if(isset($_POST['property_type_industrial'])){
        $property_type_industrial=trim($_POST['property_type_industrial']);
    }
    $property_type_land_plot_others="";
    if(isset($_POST['property_type_land_plot_others'])){
        $property_type_land_plot_others=trim($_POST['property_type_land_plot_others']);
    }



    $property_type_independent_builder="";
    if(isset($_POST['property_type_independent_builder'])){
        $property_type_independent_builder=trim($_POST['property_type_independent_builder']);
    }
    $property_type_House_villa="";
    if(isset($_POST['property_type_House_villa'])){
        $property_type_House_villa=trim($_POST['property_type_House_villa']);
    }
    $property_type_farm_house="";
    if(isset($_POST['property_type_farm_house'])){
        $property_type_farm_house=trim($_POST['property_type_farm_house']);
    }
    $property_type_bunglow="";
    if(isset($_POST['property_type_bunglow'])){
        $property_type_bunglow=trim($_POST['property_type_bunglow']);
    }
    $property_type_office_space="";
    if(isset($_POST['property_type_office_space'])){
        $property_type_office_space=trim($_POST['property_type_office_space']);
    }
    $property_type_shop="";
    if(isset($_POST['property_type_shop'])){
        $property_type_shop=trim($_POST['property_type_shop']);
    }
    $property_type_house_others="";
    if(isset($_POST['property_type_house_others'])){
        $property_type_house_others=trim($_POST['property_type_house_others']);
    }




    $budget_50LK="";
    if(isset($_POST['budget_50LK'])){
        $budget_50LK=trim($_POST['budget_50LK']);
    }
    $budget_100LK="";
    if(isset($_POST['budget_100LK'])){
        $budget_100LK=trim($_POST['budget_100LK']);
    }
    $budget_500LK="";
    if(isset($_POST['budget_500LK'])){
        $budget_500LK=trim($_POST['budget_500LK']);
    }
    $bedroom_1bhk="";
    if(isset($_POST['bedroom_1bhk'])){
        $bedroom_1bhk=trim($_POST['bedroom_1bhk']);
    }
    $bedroom_2bhk="";
    if(isset($_POST['bedroom_2bhk'])){
        $bedroom_2bhk=trim($_POST['bedroom_2bhk']);
    }
    $bedroom_3bhk="";
    if(isset($_POST['bedroom_3bhk'])){
        $bedroom_3bhk=trim($_POST['bedroom_3bhk']);
    }
    $bedroom_4bhk="";
    if(isset($_POST['bedroom_4bhk'])){
        $bedroom_4bhk=trim($_POST['bedroom_4bhk']);
    }

    $const_status_under_construction="";
    if(isset($_POST['const_status_under_construction'])){
        $const_status_under_construction=trim($_POST['const_status_under_construction']);
    }
    $const_status_ready_move="";
    if(isset($_POST['const_status_ready_move'])){
        $const_status_ready_move=trim($_POST['const_status_ready_move']);
    }
    $lable_best_deal="";
    if(isset($_POST['lable_best_deal'])){
        $lable_best_deal=trim($_POST['lable_best_deal']);
    }
    $lable_direct_emi="";
    if(isset($_POST['lable_direct_emi'])){
        $lable_direct_emi=trim($_POST['lable_direct_emi']);
    }
    $lable_hot_offer="";
    if(isset($_POST['lable_hot_offer'])){
        $lable_hot_offer=trim($_POST['lable_hot_offer']);
    }
    $lable_sold="";
    if(isset($_POST['lable_sold'])){
        $lable_sold=trim($_POST['lable_sold']);
    }



    $post_by_owner="";
    if(isset($_POST['post_by_owner'])){
        $post_by_owner=trim($_POST['post_by_owner']);
    }
    $post_by_builder="";
    if(isset($_POST['post_by_builder'])){
        $post_by_builder=trim($_POST['post_by_builder']);
    }
    $post_by_dealer="";
    if(isset($_POST['post_by_dealer'])){
        $post_by_dealer=trim($_POST['post_by_dealer']);
    }
    $post_by_agent="";
    if(isset($_POST['post_by_agent'])){
        $post_by_agent=trim($_POST['post_by_agent']);
    }
    $post_by_broker="";
    if(isset($_POST['post_by_broker'])){
        $post_by_broker=trim($_POST['post_by_broker']);
    }

}


?>

<h4><?php echo $search_data; ?></h4>

<h4><?php echo $property_type_residential; ?></h4>
<h4><?php echo $property_type_commercial; ?></h4>
<h4><?php echo $property_type_agricultural; ?></h4>
<h4><?php echo $property_type_industrial; ?></h4>
<h4><?php echo $property_type_land_plot_others; ?></h4>

<h4><?php echo $property_type_independent_builder; ?></h4>
<h4><?php echo $property_type_House_villa; ?></h4>
<h4><?php echo $property_type_farm_house; ?></h4>
<h4><?php echo $property_type_bunglow; ?></h4>
<h4><?php echo $property_type_office_space; ?></h4>
<h4><?php echo $property_type_shop; ?></h4>
<h4><?php echo $property_type_house_others; ?></h4>


<h4><?php echo $budget_50LK; ?></h4>
<h4><?php echo $budget_100LK; ?></h4>
<h4><?php echo $budget_500LK; ?></h4>

<h4><?php echo $bedroom_1bhk; ?></h4>
<h4><?php echo $bedroom_2bhk; ?></h4>
<h4><?php echo $bedroom_3bhk; ?></h4>
<h4><?php echo $bedroom_4bhk; ?></h4>

<h4><?php echo $const_status_under_construction; ?></h4>
<h4><?php echo $const_status_ready_move; ?></h4>
<h4><?php echo $lable_best_deal; ?></h4>
<h4><?php echo $lable_direct_emi; ?></h4>
<h4><?php echo $lable_hot_offer; ?></h4>
<h4><?php echo $lable_sold; ?></h4>


<h4><?php echo $post_by_owner; ?></h4>
<h4><?php echo $post_by_builder; ?></h4>
<h4><?php echo $post_by_dealer; ?></h4>
<h4><?php echo $post_by_agent; ?></h4>
<h4><?php echo $post_by_broker; ?></h4>

