<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="../style/about-stl.css">
    <title>STL in C++</title>
    
</head>
<body>
    <div class="container">
        <h1>STL in C++</h1>
        <p>The Standard Template Library (STL) in C++ is a powerful and comprehensive set of C++ template classes that provide common data structures and algorithms. It consists of four major components:</p>
        
        <div class="section">
            <h2>1. Algorithms</h2>
            <p>STL provides a rich set of algorithms that can be applied to the data structures provided by the library. These include searching, sorting, counting, and manipulating data. Algorithms are implemented independently of the container types, which allows them to be used with any container.</p>
            <div class="code-example">
                <code>
                <span class="html-tag">&lt;algorithm&gt;</span><br>
                <span class="html-tag">&lt;vector&gt;</span><br>
                <span class="html-tag">&lt;iostream&gt;</span><br><br>
                int main() {<br>
                    &nbsp;&nbsp;std::vector&lt;int&gt; v = {3, 1, 4, 1, 5, 9};<br>
                    &nbsp;&nbsp;std::sort(v.begin(), v.end());<br>
                    &nbsp;&nbsp;for (int n : v) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; n &lt;&lt; ' ';<br>
                    }<br>
                    &nbsp;&nbsp;return 0;<br>
                }
                </code>
            </div>
        </div>

        <div class="section">
            <h2>2. Containers</h2>
            <p>Containers are objects that store collections of other objects. They provide a means to manage the collection, such as inserting, deleting, and accessing elements. STL containers include vector, list, set, map, and others, each with unique characteristics.</p>
            <div class="code-example">
                <code>
                <span class="html-tag">&lt;vector&gt;</span><br>
                <span class="html-tag">&lt;iostream&gt;</span><br><br>
                int main() {<br>
                    &nbsp;&nbsp;std::vector&lt;int&gt; v = {1, 2, 3, 4, 5};<br>
                    &nbsp;&nbsp;v.push_back(6);<br>
                    &nbsp;&nbsp;for (int n : v) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; n &lt;&lt; ' ';<br>
                    }<br>
                    &nbsp;&nbsp;return 0;<br>
                }
                </code>
            </div>
        </div>

        <div class="section">
            <h2>3. Iterators</h2>
            <p>Iterators provide a way to traverse through the elements of a container. They are similar to pointers and can be used to iterate over the container's elements in a linear fashion. STL provides various types of iterators, such as input, output, forward, bidirectional, and random access iterators.</p>
            <div class="code-example">
                <code>
                <span class="html-tag">&lt;vector&gt;</span><br>
                <span class="html-tag">&lt;iostream&gt;</span><br><br>
                int main() {<br>
                    &nbsp;&nbsp;std::vector&lt;int&gt; v = {10, 20, 30};<br>
                    &nbsp;&nbsp;for (auto it = v.begin(); it != v.end(); ++it) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; *it &lt;&lt; ' ';<br>
                    }<br>
                    &nbsp;&nbsp;return 0;<br>
                }
                </code>
            </div>
        </div>

        <div class="section">
            <h2>4. Functors</h2>
            <p>Functors (or function objects) are objects that can be treated as though they are functions or function pointers. They are used to pass a function-like entity as an argument to an algorithm. A functor is any object that can be called using the function-call syntax.</p>
            <div class="code-example">
                <code>
                <span class="html-tag">&lt;iostream&gt;</span><br><br>
                struct Add {<br>
                    &nbsp;&nbsp;int operator()(int a, int b) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;return a + b;<br>
                    }<br>
                };<br><br>
                int main() {<br>
                    &nbsp;&nbsp;Add add;<br>
                    &nbsp;&nbsp;std::cout &lt;&lt; add(2, 3); // Output: 5<br>
                    &nbsp;&nbsp;return 0;<br>
                }
                </code>
            </div>
        </div>
    </div>
</body>
</html>
