class Binarytree:
    def _init_(self,data):
        self.data = data
        self.left = None
        self.right = None
    
    def addChild(self, data):
        if data == self.data:
            return
        
        if data < self.data:
            if self.left:
                self.left.addChild(data)
            else:
                self.left = Binarytree(data)
        else:
            if self.right:
                self.right.addChild(data)
            else:
                self.right = Binarytree(data)
    
    def inorder(self):
        element = [ ]
        
        if self.left:
            element += self.left.inorder()
        
        element.append(self.data)
        
        if self.right:
            element += self.right.inorder()
        
        return element
    
    def search(self,val):
        if val == self.data:
            return True
        if val < self.data:
            if self.left:
                return self.left.search(val)
            else:
                return False
        else:
            if self.right:
                return self.right.search(val)
            else:
                return False

def buildtree(element):
    root = Binarytree(element[0])
    for i in range(1,len(element)):
        root.addChild(element[i])
    return root
    
if _name_ == '_main_':
    element = [39, 87, 21, 42, 95, 52, 12]
    tree = buildtree(element)
    print(tree.inorder())
    print(tree.search(38))
