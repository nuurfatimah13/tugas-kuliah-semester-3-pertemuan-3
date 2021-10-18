<?php

# jika nilai diatas 90 = A
# jika nilai diatas 80 = B
# jika nilai diatas 70 = C
# selain itu = D

$nilai = 95;

# kondisi if
if ($nilai > 90) {
  echo "Nilai anda A";
}
# kondisi else if
else if ($nilai > 80) {
  echo "Nilai anda B";
}
else if ($nilai > 70) {
  echo "Nilai anda C";
}
# kondisi else
else {
  echo "Nilai anda D";
}
