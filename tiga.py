

def drawImage(size):
    for y in range(0,size):
        buff=""
        for x in range(0,size):
            if y == 0 or y == size-1:
                if x == 0 or x == size-1 or x == (size-1)/2:
                    buff+="* "
                else :
                    buff+="= "
            elif y == (size-1)/2:
                buff+="* "
            else:
                if x == (size-1)/2:
                    buff+="* "
                else :
                    buff+="= "

        print(buff)
        buff=""


drawImage ( 5 )
drawImage ( 7 )
                
                
                
