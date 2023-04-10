import statistics
data = [90,84,88,83,82,85,89,83,70]
rata = statistics.mean(data)

list_varian = []
for bilangan in data:
    list_varian.append(
        (bilangan - rata)**2
    )
varian = sum(list_varian)/(len(data) - 1)

simpangan_baku = statistics.sqrt(varian)
print(f'data \t \t -> {data}')
print(f'simpangan baku \t -> {simpangan_baku}')
