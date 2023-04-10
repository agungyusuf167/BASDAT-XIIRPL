def garis():
    print("==========================================")

def kamar():
    print("Pilih Kamar Yang Anda Pilih")
    print("1.Superior")
    print("2.Deluxe")
    print("3.Premium")

def tipe_kamar():
    if pilih_kamar == "1":
        print("Kamar Yang Anda Pilih : Superior")
    elif pilih_kamar == "2":
        print("Kamar Yang Anda Pilih : Deluxe")
    elif pilih_kamar == "3":
        print("Kamar Yang Anda Pilih : Premium")


garis()
#input 
nama = input("Masukkan Nama Anda : ")
kamar()
pilih_kamar = input("Pilih Tipe Kamar : ")
lama_inap = int(input("Berapa Lama Anda Menginap : "))
garis()

#kalkulasi
if pilih_kamar == "1":
    if lama_inap <= 2:
        harga_kamar = 100000*lama_inap
    elif lama_inap <= 4:
        harga_kamar = 90000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 80000*lama_inap

elif pilih_kamar == "2":
    if lama_inap <= 2:
        harga_kamar = 150000*lama_inap
    elif lama_inap <= 4:
        harga_kamar = 135000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 120000*lama_inap

elif pilih_kamar == "3":
    if lama_inap <= 2:
        harga_kamar = 200000*lama_inap
    elif lama_inap <= 4:
        harga_kamar = 180000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 160000*lama_inap

print ("Nama Anda :" , nama)
tipe_kamar()
print ("Lama Menginap :" , lama_inap , "Hari")
print ("Total Harga Yang Dibayar : Rp.", harga_kamar)
garis()