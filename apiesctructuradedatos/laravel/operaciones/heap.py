
class Heap:
    '''
    Heap class
    '''

    def __init__(self):
        self.heapList = []
        self.size = 0

    def parentIndex(self, index):
        return (index - 1) // 2

    def percolateUp(self, i):
        pass

    def insert(self, k):
        '''
        Insert an element at the end
        of heap and apply percolate up
        :param k:
        :return:
        '''
        self.heapList.append(k)
        self.size = self.size + 1
        self.percolateUp(self.size - 1)

