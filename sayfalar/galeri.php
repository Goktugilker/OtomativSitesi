<?php
include("../bas.php");
?>
    <div class="gbackground"></div>
    <div class="container-fluid">
        <div class="gbackground2 container-fluid"></div>
        <div class="row gallery grs">
            <!-- Fotoğraflar -->
            <?php
            $photos = [
                "../img/1.jpg",
                "../img/2.jpg",
                "../img/3.jpg",
                "../img/4.jpg",
                "../img/5.jpg",
                "../img/6.jpg",
                "../img/7.jpg",
                "../img/8.jpg",
                "../img/9.jpg",
                "../img/10.jpg",
                "../img/11.jpeg",
                "../img/f40.jpg",
                "../img/g63.jpg",
                "../img/peakpx.jpg",
                "../img/s90.jpg",
                "../img/s2000.jpg"
            ];
            foreach ($photos as $index => $photo) {
                echo '<div class="col-lg-3 col-md-4 col-6">';
                echo '<img src="' . $photo . '" alt="Fotoğraf ' . ($index + 1) . '" data-target="#photoModal" data-toggle="modal" data-index="' . $index . '">';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="prevImage">Önceki</button>
                    <button type="button" class="btn btn-secondary" id="nextImage">Sonraki</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/scripts.js"></script>
<?php
include("../son.php");
?>