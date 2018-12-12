#zadanie 1
with open('dane.txt') as fp: 
  i=0
  for line in fp: 
    k=0
    for char in line: 
      if char.isdigit(): 
        k=k+1
    if k+1 == len(line): 
      i = i+1
  print 'Liczba hasel skladajacych sie tylko z cyfr wynosi', i


#zadanie 1 Ascii
with open('dane.txt') as fp: 
  i=0
  for line in fp: 
    k=0
    for char in line: 
      if ord(char) >47 and ord(char)<58:
        k=k+1
    if k+1 == len(line): 
      i = i+1
  print 'Liczba hasel skladajacych sie tylko z cyfr wynosi', i


#zadanie 2
with open('dane.txt') as fp: 
  i=0
  for line in fp: 
    k=0
    lower=0
    upper=0
    for char in line: 
      if char.isdigit(): 
        k=k+1
      if char.islower(): 
        lower=lower+1
      if char.isupper(): 
        upper=upper+1
    if k > 0 and lower > 0 and upper >0: 
      i = i+1
  print 'Liczba hasel ktore maja minimum 1 cyfre, 1 mala litere i 1 duza litere wynosi', i


#zadanie 3
with open('dane.txt') as fp:
  tempFile = fp.readlines()
  sa = []
  for line in tempFile:
    i=0
    for lineCheck in tempFile: 
      if lineCheck == line:
        i=i+1
    if i >1 and line not in sa:
      sa.append(line)
  sa.sort()
  for arrayLine in sa:
    print arrayLine
    

#zad 4 - cos tu nie dziala
with open('dane.txt') as fp: 
  i=0
  for line in fp: 
    array = []
    for char in line: 
      array.append(ord(char))
    array.sort()
    temp = array[0]
    k=0
    for item in array: 
      if temp == item-1:
        if k==0: 
          k=k+1
        else:
          k=k+1
      temp = item
    if k > 3:
      i = i+1
  print 'takich hasel jest', i

      