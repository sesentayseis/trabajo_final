from operaciones.heap import Heap
class MaxHeap(Heap):
    def __init__(self):
        Heap.__init__(self)


    def perocolateUp(list):
        heap = MaxHeap()
        heap.buildHeap(list)
        for i in range(len(heap.heapList)):
            ret = heap.delete()
            print(ret)

    def prueba2(self,valor1):
        list = valor1

        for i in range(len(list)):
            self.insert(list[i])
        return self.heapList

class prueba2:
    def prueba2(valor1):
        heap = MaxHeap()
        return heap.prueba2(valor1)