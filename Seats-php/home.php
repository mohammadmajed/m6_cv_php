<?php
include "./header.php";
create_seats(20);
?>


<div class="row my-5 py-5">

    <?php foreach (get_seats() as $seat) :
        // if the seat is available > let any user reserve
        if ($seat->is_available) { ?>
            <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                <?= $seat->seat_num ?>
            </a>
            <?php
        } else {
            // if the seat is unavailable > check if the current user is the one who reserved the seat
            if ($seat->user_id == $_SESSION['user']['user_id']) {
                // if true
                // allow the user to make the seat available 
            ?>
                <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </a>
            <?php
            } else {
                // if false
                // do not allow the user to make the seat available
            ?>
                <div class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </div>
    <?php
            }
        }
    endforeach; ?>


</div>
<!-- 
<div class="card" style="width: 15rem;">
  <img src="./assets/625737373b98216393ee8a3a_62570f2df748166a2aba2fc1_reserved-seating-illustration.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Seats </h5>
    <p class="card-text">Book your seat now</p>
    <a href="./seat_reservation.php" class="btn btn-info btn-lg btn-block">Book!!</a>
  </div>
</div> -->

