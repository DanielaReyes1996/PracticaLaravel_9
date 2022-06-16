# semana=("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo")
# x=0
# (varuno,vardos,vartres,varcuatro,varcinco,varseis,varsiete)=semana
# print(semana)
# while x<len(semana):
#     print(semana[x])
#     x+=1
# monedas=("Euro", "Dollar", "Yen", "Libra", "Esterlina", "Pesos")
# print(monedas)

# contar=0
# new=1
# suma=1
# while contar<=3:
#     contar+=1
#     monedas= list(monedas)
#     new= str(input(f"Ingrese la modena {contar}: "))
#     monedas.append(new)
#     monedas= tuple(monedas)
    
#     if contar==3:
#         print(monedas)
#         break
#     else:
#         continue

tiempo= (2.43,3.23,4.10)
(tuno,tdos,ttres)=tiempo
print(tiempo)
i=3
contar=1
x=0
suma=0
for x in range(1,i+1):
    contar+=1
    marcas=input(f"Ingrese la marca {x}:")
    tiempo= list(tiempo)
    tiempo.append(marcas)
    
while x<len(tiempo):
    tiempo= list(tiempo)
    suma=suma+x
    prom= x/6
    tiempo.append(prom)
    tiempo= tuple(tiempo)

    print(tiempo)
    break


