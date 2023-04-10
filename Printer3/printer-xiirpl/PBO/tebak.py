def garis():
    print("============================")

import random
angka_rahasia = random.randint(1,999)

garis()
print("Kami telah memiliki angka, Silahkan tebak!")
garis()

while True:
    jawaban = int(input("\n Masukkan Angka : "))
    if jawaban == angka_rahasia:
        print("Selamat Anda Menebak Dengan Benar, anda mendapatkan warisan bapaknya fachrul")
    else:
        print(
            'Tebakan mu terlalu kecil'
            if jawaban < angka_rahasia else 'Tebakan mu telalu besar'
        )
