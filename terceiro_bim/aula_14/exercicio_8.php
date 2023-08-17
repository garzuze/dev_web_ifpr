<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="lg:flex">
        <div class="apresentacao w-full lg:w-1/2 mx-auto p-12">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Instantes Frios de Prazer Refrescante (IFPR)
                </span>
            </h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Aqui nós fazemos seus instantes mais frios, mais prazerosos, e, obviamente, mais refrescantes.<br>
                (Professor esse site é responsivo, testa aí)
            </p>
        </div>
        <div class="foto w-full lg:w-1/2 border-l-8 border-sky-400 mx-auto">
            <img src="depoimento.png" class="rounded-r-2xl w-full">
        </div>
    </div>
    <div class="lg:flex m-10">
        <div class="tabela w-full lg:w-1/3 mx-auto">
            <div class="relative overflow-x-auto">
                <table class="w-full text-left text-gray-500">
                    <thead class="text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Bebida
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Preço
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Água
                            </th>
                            <td class="px-6 py-4">
                                R$ 3,00
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Chá
                            </th>
                            <td class="px-6 py-4">
                                R$ 5,00
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Soda Italiana
                            </th>
                            <td class="px-6 py-4">
                                R$ 10,00
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pergunta w-full lg:w-1/3 mx-auto items-center px-6">
            <blockquote class="p-4 border-l-4 border-gray-300 bg-sky-200">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900 text-center">
                    O que vai ser hoje?
                </p>
            </blockquote>
        </div>

        <div class="pedido w-full lg:w-1/3 mx-auto p-3">
            <p class="text-xl font-medium text-gray-900 text-center">
                Faça seu pedido!
            </p>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <form action="pagamento.php" method="post">
                <div class="grid grid-cols-2 gap-2">
                    <label for="quant_agua" class="text-center">Água</label>
                    <input type="number" name="quant_agua" id="quant_agua"
                    step="1" class="p-2 bg-gray-200 border-0 rounded-xl" 
                     placeholder="Digite a quantidade" min="0">

                    <label for="quant_cha" class="text-center">Chá</label>
                    <input type="number" name="quant_cha" id="quant_chá" step="1" 
                    class="p-2 bg-gray-200 border-0 rounded-xl" 
                     placeholder="Digite a quantidade" min="0">

                    <label for="quant_soda" class="text-center">Soda Italiana</label>
                    <input type="number" name="quant_soda" id="quant_soda" step="1" 
                    class="p-2 bg-gray-200 border-0 rounded-xl" 
                    placeholder="Digite a quantidade" min="0">

                </div>

                <input type="submit" name="submit" value="Pedir" 
                class="w-full bg-sky-200 p-4 mt-4 hover:shadow-xl">
            </form>
            
            
        </div>
    </div>
    
</body>

</html>