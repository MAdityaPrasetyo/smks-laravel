     <!-- Footer -->
     <!-- Footer Utama -->
     <footer class="main-footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 mt-3">
                     <div class="row">
                         <div class="col-6">
                             <div class="footer-logo">
                                 <img class="img-fluid" src="/img/smk-smart.png" alt="Logo Perusahaan"
                                     style="height: 100px; width: 100x;">
                             </div>
                             <p class="logo2">SMKS SMART</p>
                             <div class="social-icons" style="text-align: left;">
                                 <a href="#"><i class="fab fa-google fa-2x"></i></a>
                                 <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                                 <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                                 <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                             </div>
                         </div>

                         <div class="col-6">
                             <div class="footer-links">
                                 <h3 class="h3">Contact Us</h3>
                                 <ul class="mt-4">
                                     <li>
                                         <i class="fas fa-envelope"></i>
                                         <a href="mailto:your@email.com">your@email.com</a>
                                     </li>
                                     <li>
                                         <i class="fas fa-phone"></i>
                                         <a href="tel:+123456789">+123 456 789</a>
                                     </li>
                                     <li>
                                         <i class="fas fa-map-marker-alt"></i>
                                         Alamat Anda, Kota Anda
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- Tautan Contact Us -->
                     <div class="col-md-3 mt-3">
                         <!-- Konten Tautan Contact Us -->
                     </div>
                 </div>
                 <!-- Tautan Useful Links -->
                 <div class="col-md-6 mt-3">
                     <!-- Konten Tautan Useful Links dan Recent Blogs -->
                     <div class="footer-links">
                         <div class="row">
                             <div class="col-6">
                                 <h3>Useful Links</h3>
                                 <ul class="list-unstyled mt-4">
                                     <li><a href="#" style="color: #3E3E3E;"><i
                                                 class="fas fa-arrow-circle-right"></i> Home</a></li>
                                     <li><a href="#" style="color: #3E3E3E;"><i
                                                 class="fas fa-arrow-circle-right"></i> About Us</a></li>
                                     <li><a href="#" style="color: #3E3E3E;"><i
                                                 class="fas fa-arrow-circle-right"></i> Blog</a></li>
                                     <li>
                                         <form action="/logout" method="post">
                                             @csrf
                                             <button type="submit" class="dropdown-item"><i
                                                     class="fas fa-arrow-circle-right"></i>
                                                 Log out</a></button>
                                         </form>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-6">
                                 <h3>Recent Blog</h3>
                                 <ul class="list-unstyled mt-4">
                                     <li><a href="#" style="color: #3E3E3E;">Judul Blog 1</a></li>
                                     <li><a href="#" style="color: #3E3E3E;">Judul Blog 2</a></li>
                                     <li><a href="#" style="color: #3E3E3E;">Judul Blog 3</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>

     <!-- Secondary Footer (Copyright dan Medsos) -->
     <div class="container-fluid secondary-footer">
         <div class="container">
             <div class="row align-items-center text-center">
                 <!-- Copyright di sebelah kiri -->
                 <div class="col-md-6">
                     <p class="company-name">&copy; All right reversed 2023 SMKS_SMART</p>
                 </div>
                 <!-- Medsos di sebelah kanan -->
                 <div class="col-md-6">
                     <div class="social-icons2">
                         <a href="#"><i class="fab fa-google fa-2x"></i></a>
                         <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                         <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                         <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                         <!-- Anda dapat menambahkan ikon media sosial lainnya sesuai kebutuhan -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
