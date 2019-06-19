@extends('layouts.app')

      @section('content')  
        
        
        <!-- Start section setting -->
        
        <div class="setting">
            <div class="section-setting">
                <div class="setting-close">
                    <i class="fa fa-times fa-x" id="close"></i>
                </div>
                
                <div class="setting-img">
                    <div class="setting-background-img">
                        <img src="images/BC.jpg" alt="Oops">
                        <div class="edite-background">
                            <i class="fa fa-times fa-x delate"></i>
                        </div>
                    </div>
                    
                    <div class="setting-profile-img">
                        <img src="images/PU2.png" alt="Oops">
                        <div class="edite-profile">
                            <i class="fa fa-times fa-x delate"></i>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="setting-profile-info">
                    <div class="all-menu">
                        <div class="open" id="open1">
                            <span>Profile Information</span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="menu" id="1">
                            <form>
                                <label>Name :</label>
                                <input type="text" placeholder="Enter Your name...">
                                <label>Type of talent :</label>
                                <input type="text" placeholder="Enter Your name...">
                                <label>Emil :</label>
                                <input type="email" placeholder="Enter Your email...">
                                
                                <div class="open-inside" id="open3">
                                    <span>Password :</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="menu" id="3">
                                    <form>
                                        <label>Curent Password :</label>
                                        <input type="password" placeholder="Enter Your email...">
                                        <label>New Password :</label>
                                        <input type="password" placeholder="Enter Your email...">
                                        <label>Renter New Password :</label>
                                        <input type="password" placeholder="Enter Your email...">
                                    </form>
                                </div>
                            </form>   
                        </div>
                        
                        
                        <div class="open" id="open2">
                            <span>About Information</span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="menu" id="2">
                            <form>
                                <label>About :</label>
                                <textarea placeholder="Enter your information"></textarea>
                                <label>Favourite :</label>
                                <textarea placeholder="Enter your information"></textarea>
                                <div class="open-inside" id="open4">
                                    <span>Other Network :</span>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <input type="url" placeholder="Enter Your Linke..." id="4">   
                            </form>   
                        </div>
                    </div>
                </div>
                
                <div class="save-edit">
                    <form>
                        <input type="submit" value="Save">
                    </form>
                </div>
                
            </div>
        </div>
        
        <!-- End section setting -->
        
        
        
        <!-- Start overlay -->
        
        <div class="overlay"></div>
        
        <!-- End overlay -->
        
        
        
        <!-- Start Contant -->
        
        <div class="contant">
           
            
            
            <!-- Start Center -->
            
            <div class="center">
                
                <div class="body">
                    
                    <!-- End Aside Left -->
                    
                    <div class="aside-left">
                        <div class="profile-intro">
                            <div class="title">
                                <span class="title-name"><img src="images/PU2.png" width="40px" height="40px" style="border-radius: 20px"></span>
                                
                                <span class="title-name"><h4 style="margin-left: -15px"><b>User Name</b></h4></span>
                                
                            </div>
                            <hr class="hr">
                            
                            <div class="title">
                                <span class="title-name">Category</span>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                               
                            </div>
                            <hr class="hrL">
                            
                            <table class="tab">
                                 <span>
                                    <tr> 
                                        <th>
                                            <div class="divCat" style="cursor:pointer"><a>Singing</a></div>
                                        </th>
                                        <th><div class="divCatc" ></div></th>
                                        <th>
                                            <div class="divCat"><a>Dancing</a></div>
                                        </th>
                                     </tr>
                                     
                                    <tr> 
                                        <th>
                                            <div class="divCat"><a>Quran</a></div>
                                        </th>
                                        <th><div class="divCatc"></div></th>
                                        <th>
                                            <div class="divCat"><a>Drawing</a></div>
                                        </th>
                                     </tr>
                                    
                                     <tr>
                                         <th>
                                             <div class="divCat"><a>Art</a></div>
                                         </th>
                                         <th><div class="divCatc"></div></th> 
                                         <th> 
                                             <div class="divCat"><a>Other</a></div>
                                         </th>
                                     </tr>
                                     </span>
                            </table>
                            <hr class="hr">
                            <div class="title">
                                <span class="title-name">Compeition</span>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <hr class="hrL">
                            
                            <table>
                            
                                <tr> 
                                        <th>
                                            <div class="divCat"><a>Quran</a></div>
                                        </th>
                                        <th><div class="divCatc"></div></th>
                                        <th>
                                            <div class="divCat"><a>Drawing</a></div>
                                        </th>
                                     </tr>
                                    
                                     <tr>
                                         <th>
                                             <div class="divCat"><a>Art</a></div>
                                         </th>
                                         <th><div class="divCatc"></div></th> 
                                         <th> 
                                             <div class="divCat"><a>Dancing</a></div>
                                         </th>
                                     </tr>
                            
                            </table>
                            
                            <hr class="hr">
                            
                              <div class="items-play">
                            <p><span> &copy;  2019 ITalent About Us Help
                                Terms Privacy policy
                                Marketing Bussiness Developers</span> </p>
                                <a href="https://play.google.com/store?hl=ar">
                                <button style='font-size:24px'>Google Play <i class='fab fa-google-play'></i></button>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- End Aside Left -->

                    
                    
                    <!-- Start Section Posts -->
                    
                    <div class="posts current-post">
                        
                        
                        <!-- Start Create Poste -->
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ Session::get('success') }}
                            </div>
                        @endif
 
                 

                            <div class="create-poste-content">
                            <div class="upload">
                                <div class="upload-selction">
                                   
                                    <div>
                                        <i class="fa fa-photo"></i>
                                        <span>Add Photo / Video</span>
                                    </div>
                                    <i class="fa fa-times close-create-post"></i>
                                </div>
                                <div class="upload-text">
                                    <img src="images/PU2.png" alt="Oops">
                                    <form>
                                        <textarea placeholder="What's on your mind?" id="text1" autofocus></textarea>
                                        <div class="validation">
                                            <div class="validation-box">
                                                <span>The Post is empty</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="upload-post">
                                    <form>
                                        <input type="button" value="Post"  id="uplod-button">
                                    </form>
                                </div>
                            </div>
                        </div>

                       

                        


                        <!-- End Create Poste -->
                        
                        <div class="upload" id="upload">
                            <div class="upload-selction">
                                <i class="fa fa-photo"></i>
                                <span>Add Photo / Video</span>
                            </div>
                            <div class="upload-text">
                                <img src="images/PU2.png" alt="Oops">
                                <form>
                                    <textarea placeholder="What's on your mind?" id="open-create"></textarea>
                                </form>
                            </div>
                            <div class="upload-post">
                                <form>
                                    <input type="submit" value="Post">
                                </form>
                            </div>
                        </div>
                        
                        
                        
                        <div class="post">
                            <div class="post-icon">
                                <i class="fa fa-heart-o like"></i><h5>100K</h5>
                                <i class="fa fa-comment"></i><h5>100K</h5>
                                <i class="fa fa-share-square-o"></i><h5>100K</h5>
                            </div>
                            
                            
                            <div class="post-head">
                                <div class="post-info">
                                    <img src="images/PU2.png" alt="Oops">
                                    <div class="post-info-name">
                                        <span class="name">User Name</span>
                                        <span class="time">20 Hours ago</span>
                                    </div>
                                </div>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit Post</a></li>
                                            <li><a href="#">Delete Post</a></li>
                                            <li><a href="#">Turn OFF Notifications</a></li>
                                            <li><a href="#">Select as Featured</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
                            </div>

                            <div class="post-footer">
                               
                            </div>
                        </div>
                        
                        <div class="post">
                            <div class="post-icon">
                                <i class="fa fa-heart-o like"></i><h5>100K</h5>
                                <i class="fa fa-comment"></i><h5>100K</h5>
                                <i class="fa fa-share-square-o"></i><h5>100K</h5>
                            </div>
                            
                            
                            <div class="post-head">
                                <div class="post-info">
                                    <img src="images/PU2.png" alt="Oops">
                                    <div class="post-info-name">
                                        <span class="name">User Name</span>
                                        <span class="time">20 Hours ago</span>
                                    </div>
                                </div>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit Post</a></li>
                                            <li><a href="#">Delete Post</a></li>
                                            <li><a href="#">Turn OFF Notifications</a></li>
                                            <li><a href="#">Select as Featured</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
                            </div>
                            <div class="post-footer">
                                
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-icon">
                                <i class="fa fa-heart-o like"></i><h5>100K</h5>
                                <i class="fa fa-comment"></i><h5>100K</h5>
                                <i class="fa fa-share-square-o"></i><h5>100K</h5>
                            </div>
                            
                            
                            <div class="post-head">
                                <div class="post-info">
                                    <img src="images/PU2.png" alt="Oops">
                                    <div class="post-info-name">
                                        <span class="name">User Name</span>
                                        <span class="time">20 Hours ago</span>
                                    </div>
                                </div>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit Post</a></li>
                                            <li><a href="#">Delete Post</a></li>
                                            <li><a href="#">Turn OFF Notifications</a></li>
                                            <li><a href="#">Select as Featured</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
                            </div>
                            <div class="post-footer">
                                
                            </div>
                        </div>
                        
                        <div class="post">
                            <div class="post-icon">
                               <i class="fa fa-heart-o like"></i><h5>100K</h5>
                                <i class="fa fa-comment"></i><h5>100K</h5>
                                <i class="fa fa-share-square-o"></i><h5>100K</h5>
                            </div>
                            
                            
                            <div class="post-head">
                                <div class="post-info">
                                    <img src="images/PU2.png" alt="Oops">
                                    <div class="post-info-name">
                                        <span class="name">User Name</span>
                                        <span class="time">20 Hours ago</span>
                                    </div>
                                </div>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit Post</a></li>
                                            <li><a href="#">Delete Post</a></li>
                                            <li><a href="#">Turn OFF Notifications</a></li>
                                            <li><a href="#">Select as Featured</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
                                <img src="images/PU2.png" alt="Post">
                            </div>

                            <div class="post-footer">
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Posts -->
                    <div class="aside-right">
                        
                        
                         <div class="top-post">
                             <div class="Fimage">
                          <div class="title">
                                <span class="title-name">Friend Suggestion</span>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                     
                             <hr class="hr">
                            <div class="posts-photo-N">
                                
                                <ul>
                                <table>
                                    <tr>
                                        <td>
                                            
                                            <a href="file:///C:/Users/Elhawary/Desktop/project%20%20I%20TALENT/I%20talent(U).html#">
                                            <img src="images/PU2.png" alt="Oops">
                                            </a>
                    
                                        </td>
                                        <td>
                                            <h5><a href="#">NameTalent</a></h5>
                                        </td>
                                        <td>
                                        <i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>

                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            
                                            <a href="file:///C:/Users/Elhawary/Desktop/project%20%20I%20TALENT/I%20talent(U).html#">
                                            <img src="images/PU2.png" alt="Oops">
                                            </a>
                    
                                        </td>
                                        <td>
                                            <h5><a href="#">NameTalent</a></h5>
                                        </td>
                                        <td>
                                        <i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>

                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            
                                            <a href="file:///C:/Users/Elhawary/Desktop/project%20%20I%20TALENT/I%20talent(U).html#">
                                            <img  src="images/PU2.png" alt="Oops" width="15px" height="15px">
                                            </a>
                    
                                        </td>
                                        <td>
                                            <h5><a href="#">NameTalent</a></h5>
                                        </td>
                                        <td>
                                        <i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>

                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            
                                            <a href="file:///C:/Users/Elhawary/Desktop/project%20%20I%20TALENT/I%20talent(U).html#">
                                            <img  src="images/PU2.png" alt="Oops">
                                            </a>
                    
                                        </td>
                                        <td>
                                            <h5><a href="#">NameTalent</a></h5>
                                        </td>
                                        <td>
                                        <i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>

                                        </td>
                                    </tr>
                                            <tr>
                                        <td>
                                            
                                            <a href="file:///C:/Users/Elhawary/Desktop/project%20%20I%20TALENT/I%20talent(U).html#">
                                            <img  src="images/PU2.png" alt="Oops">
                                            </a>
                    
                                        </td>
                                        <td>
                                            <h5><a href="#">NameTalent</a></h5>
                                        </td>
                                        <td>
                                        <i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>

                                        </td>
                                    </tr>
                                </table>
                                </ul>
                            </div>
                        </div>
                     </div>
                        
                        
                        
                        <div class="top-post">
                            <div class="title">
                                <span class="title-name">Top Posts</span>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <hr class="hr">
                            <div class="posts-photo">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                                <img src="images/PU2.png" alt="Oops">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End Center -->
            
            
            
            
           
                
        </div>  <!-- End Contant -->
        
        
        
        
        
        
        
        
        
        
        
       
   @endsection