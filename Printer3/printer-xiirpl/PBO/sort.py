def garis():
    print ("========================================")

garis()
print ("Masukkan Enam Buah Nilai")
a = int(input("Nilai A : "))
b = int(input("Nilai B : "))
c = int(input("Nilai C : "))
d = int(input("Nilai D : "))
e = int(input("Nilai E : "))
f = int(input("Nilai F : "))

nilai = [a,b,c,d,e,f]
total = a+b+c+d+e+f
asc = sorted(nilai)
dsc = sorted(nilai, reverse=True)
max = max(nilai)
min = min(nilai)
sum = total / len(nilai)
#output
print ('Urutan Nilai Ascending  : ', asc)
print ('Urutan Nilai Descending : ', dsc)
print ('Nilai MAX :', max)
print ('Nilai MIN :', min)
print ('Nilai RATA RATA :', sum)
garis()