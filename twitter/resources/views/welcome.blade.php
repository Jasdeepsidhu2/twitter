<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Welcome</title>
</head>
<body>
    <header>
        <div class="top-top">top-top</div>
        <div class="hero bg-1"></div>
        <div class="stats flex ">
            <div class="profile-pic"></div>
            <ul class='stats-links flex '>
                <li ><a  href="#">
                        <div class="label">Tweets</div>
                        <div class="value"><?php echo $user->tweets?></div></a></li>
                <li><a href="#"> 
                        <div class="label">Following</div>
                        <div class="value"> <?php echo $user->following?></div>
                    </a>    
                </li>
                <li><a href="#">
                        <div class="label">Followers</div>
                        <div class="value"><?php echo $user->followers?></div>
                    </a></li>
                <li><a href="#"> 
                        <div class="label">Likes</div>
                        <div class="value"><?php echo $user->likes?></div>
                    </a></li>
                <li><a href="#"> 
                    <div class="label">Moments</div>
                    <div class="value"><?php echo $user->moments?></div>
                </a></li>

            </ul>
        </div>
    </header>
    <div class='main flex full-page flex-1 bg-1'>
        <div class="user-details bg-1 ">
            <h3><?php echo $user->name ?></h2> 
            <p><?php echo $user->handle ?></p>
           
            <p><?php echo $user->description ?></p>
           
            <span><i class="fas fa-link"></i><a href="#"><?php echo $user->link ?></a></span>
            <p><?php echo $user->joinedDate ?><p>
 
        </div>
        <div class="tweets bg-w">
        <?php foreach ($tweetsList as $twitting):?>
            <div class="tweetDetail flex">
                <div >
                        <img class="tweetCard" src="<?php echo $twitting['user']['image'] ?>" alt="">
                </div>
                <div class='tweetDescription'>
                        <?php echo $twitting['user']['name'] ?>
                        <?php echo $twitting['user']['handle'] ?>
                        <?php echo $twitting['date'] ?>
                </div>

            </div>
        <?php endforeach;?>

            
        
        
        
        </div>
        <div class="suggestions bg-1 ">
           <div class="suggestionCard1 bg-w">
                <h3>You may also like.</h3> 
                <!--  -->
                <?php foreach ($youMightLike as $twitter): //looping to avoid multiple divs?> 
                        <div class="people flex">
                                <div    >
                                     <img class='image' src="https://pbs.twimg.com/profile_images/1052210317302718465/ewdLh-yS_bigger.jpg"> 
                                    

                                </div>   
                                
                                <div class='peopleDescription'>
                                    <p><?php echo $twitter['name'] ?></p>
                                    <p><?php echo $twitter['handle'] ?></p>
                                </div>
                        </div>
                        <!-- <div class="people flex">
                                <div class='image' >
                                    <img src="./../views/images/pic.jpg" alt="image">
                                </div>    
                                <div class='peopleDescription'>
                                    <h3> John Basturd</h3>
                                    <p>@john</p>
                                </div>
                        </div>
                        <div class="people flex">
                                <div class='image' >
                                    <img src="./../views/images/pic.jpg" alt="image">
                                </div>    
                                <div class='peopleDescription'>
                                    <h3> John Basturd</h3>
                                    <p>@john</p>
                                </div>
                        </div> -->
                
                
            <?php endforeach;?>
        
        
        </div>
            <div class="suggestionCard2 bg-w"></div>
            
            
            
            
        </div>

       
    </div>
   
</body>
</html>