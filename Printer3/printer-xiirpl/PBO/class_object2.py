#siswa (nama dan asal)
#fungsi/operation = taaruf

class siswa:
    nama = None
    asal = None

    def taaruf(self):
        print (f'Halo saya {self.nama} dari {self.asal}')

#kita panggil

juan  = siswa()
juan.nama = input("Nama anda siapa ?")
juan.asal = input("asalnya dari mana")

#panggil fungsinya
juan.taaruf()