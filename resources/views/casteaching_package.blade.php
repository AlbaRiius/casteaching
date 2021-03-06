<x-casteaching-layout>
    <button id="getVideos" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        GET VIDEOS
    </button>
    <script>

        async function getVideos(){
            return await window.axios.get('https://casteaching.test/api/videos')
        }
        document.getElementById('getVideos').addEventListener('click', async function () {
            try {
                const videos = await window.casteaching.videos();
                console.log(videos);
            } catch (err) {
                console.log(err);
            }
        });
        document.addEventListener("DOMContentLoaded", function (event){
            console.log('CONTENT LOADED');
        });
    </script>
</x-casteaching-layout>
